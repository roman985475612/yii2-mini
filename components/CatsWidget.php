<?php

namespace app\components;

use app\models\Category;
use yii\base\Widget;

class CatsWidget extends Widget
{
    public function run()
    {
        $html = \Yii::$app->cache->get('catsMene');
        
        if (!$html) {
            $cats = Category::find()
                ->select(['alias', 'title'])
                ->asArray()
                ->orderBy('title')
                ->all();

            $html = $this->render('cats', ['cats' => $cats]);

            \Yii::$app->cache->set('catsMenu', $html, 60);
        }

        return $html;
    }
}