<?php

namespace app\mobile\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Home;
use app\mobile\controllers\CommonController;
use app\models\Product;

class HomeController extends CommonController
{
	public function behaviors()
	{
		return [
			[
				'class'=>'yii\filters\HttpCache',
				'lastModified'=>function(){
					$count1 = (new \yii\db\Query())->from('ocean_carousel')->count();
					$count2 = (new \yii\db\Query())->from('ocean_product')->count();
					// 产品数量和轮播图数量发生变化这不会用缓存
					$count = $count1 + $count2 + 1;
					return $count;
				}
			]
		];
	}
	
    public function actionIndex()
    {
        $this->layout = 'layout1';
        $model = Home::find()->orderby('orderid asc')->all();
        $product = Product::find()->where(['is_tui'=>'1'])->orderBy('orderid')->asArray()->all();
        return $this->render('index',['model'=>$model,'product'=>$product]);
    }

    
}