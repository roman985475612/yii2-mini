<?php

namespace app\controllers;

use app\models\Post;
use app\models\Category;
use yii\data\Pagination;
use yii\web\Controller;

class PostController extends Controller
{
    public $title;
    public $keywords;
    public $description;

    public function actionIndex()
    {        
        $params['menu'] = Category::find()->all();

        $query = Post::find()->with('category');
        
        $pages = new Pagination([
            'defaultPageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            'totalCount' => $query->count(), 
        ]);
        
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $this->title = 'Yii2 App mini';
        $this->keywords = 'App';
        $this->description = 'This is my app';
            
        return $this->render('index', [
            'pages' => $pages,
            'posts' => $posts,
        ]);
    }

    public function actionView($id)
    {
        $post = Post::findOne($id);

        $this->title = $post->title;
        $this->keywords = $post->keywords;
        $this->description = $post->description;

        return $this->render('view', [
            'post' => $post
        ]);
    }

    public function actionCategory($alias)
    {
        $category = Category::findOne(['alias' => $alias]);
        
        $query = Post::find()->where(['category_id' => $category->id]);
        
        $pages = new Pagination([
            'defaultPageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            'totalCount' => $query->count(), 
        ]);
        
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
            
        $this->title = $category->title;
        $this->keywords = $category->title;
        $this->description = 'This is my app';
        
        return $this->render('index', [
            'pages' => $pages,
            'posts' => $posts,
        ]);

    }

}