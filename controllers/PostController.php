<?php

namespace app\controllers;

use app\models\Post;
use app\models\Category;
use yii\data\Pagination;
use yii\web\HttpException;

class PostController extends AppController
{
    public $title;
    public $keywords;
    public $description;

    public function actionIndex()
    {        
        $params['menu'] = Category::find()->all();

        $query = Post::find()
            ->select(['id', 'title', 'exerpt', 'created_at', 'category_id', 'img'])
            ->with('category');
        
        $pages = new Pagination([
            'defaultPageSize' => 3,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            'totalCount' => $query->count(), 
        ]);
        
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $this->setMeta('My Blog', 'keys1', 'Description site');
            
        return $this->render('index', [
            'pages' => $pages,
            'posts' => $posts,
        ]);
    }

    public function actionView($id)
    {
        $post = Post::findOne($id);

        if (empty($post)) {
            throw new HttpException(404, 'Page not found');
        }

        $this->setMeta($post->title, $post->keywords, $post->description);

        return $this->render('view', [
            'post' => $post
        ]);
    }

    public function actionCategory($alias)
    {
        $category = Category::findOne(['alias' => $alias]);

        if (empty($category)) {
            throw new HttpException(404, 'Page not found');
        }
        
        $query = Post::find()
            ->select(['id', 'title', 'exerpt', 'created_at', 'category_id', 'img'])
            ->where(['category_id' => $category->id]);
        
        $pages = new Pagination([
            'defaultPageSize' => 3,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            'totalCount' => $query->count(), 
        ]);
        
        $posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        $this->setMeta($category->title, $category->keywords, $category->description);
        
        return $this->render('index', [
            'pages' => $pages,
            'posts' => $posts,
        ]);

    }

}