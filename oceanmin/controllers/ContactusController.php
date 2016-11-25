<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use Yii;
use app\models\Message;
use app\models\Company;
use app\models\Front;
use app\controllers\CommonController;

class ContactusController extends CommonController
{
	public function behaviors()
	{
		return [
		[
		'class'=>'yii\filters\HttpCache',
		'only' => ['index'],
		'lastModified'=>function(){
			$count1 = (new \yii\db\Query())->from('ocean_company')->where(['companyid'=>1])->max('createtime');
			// 产品数量和轮播图数量发生变化这不会用缓存
			$count = $count1 + 1;
			return $count;
		}
		]
		];
	}
	public function actionIndex()
	{
		$this->layout = 'layout1';
		$model = new Message();
		$company = Company::find()->asArray()->one() ;
		if (Yii::$app->request->isPost) {
			$post = Yii::$app->request->post();
			$post['Message']['createtime'] = time();
			if ($model->add($post)) {
				Yii::$app->session->setFlash('success','添加成功');
				return $this->goback(['contactus/index']);
			}else{
				Yii::$app->session->setFlash('error','添加失败');
			}
		}
		$front = Front::find()->where('frontid = :id', [':id' => '1'])->one();
		return $this->render('index',['front'=>$front,'company'=>$company,'model'=>$model]);
	}


}