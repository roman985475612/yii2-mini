<?php

namespace app\components;

use app\models\Category;
use yii\base\Widget;

class TopMenuWidget extends Widget
{
    public function run()
    {
        $html = \Yii::$app->cache->get('topMenu');

        if (!$html) {
            $cats = Category::find()
                ->select(['alias', 'title'])
                ->asArray()
                ->orderBy('title')
                ->all();

            $html = $this->render('topMenu', ['cats' => $cats]);

            \Yii::$app->cache->set('topMenu', $html, 60);
        }

        return $html;
    }
}