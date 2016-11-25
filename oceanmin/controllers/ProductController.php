<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use app\models\Company;
use app\models\Front;
use Yii;
use app\controllers\CommonController;

class ProductController extends CommonController
{
	public function behaviors()
	{
		return [
		[
		'class'=>'yii\filters\HttpCache',
		'only' => ['index'],
		'lastModified'=>function(){
			$count1 = (new \yii\db\Query())->from('ocean_product')->count();
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
		$menu = Category::getMenu();
		$cateid = Yii::$app->request->get('cateid');
		if ($cateid) {
			$model = Product::find();
			$count = $model->where(['cateid'=>$cateid])->count();
			$pager = new Pagination(['totalCount' => $count, 'pageSize' => '9']);
			$products = $model->where(['cateid'=>$cateid])->offset($pager->offset)->limit($pager->limit)->all();
		}else{
			$model = Product::find();
			$count = $model->count();
	        $pager = new Pagination(['totalCount' => $count, 'pageSize' => '9']);
			$products = $model->offset($pager->offset)->limit($pager->limit)->all();
		}
		$company = Company::find()->asArray()->one();
		$front = Front::find()->where('frontid = :id', [':id' => '1'])->one();
		return $this->render('index',['front'=>$front,'menu'=>$menu,'products'=>$products,'company'=>$company,'pager'=>$pager]);
	}

	public function actionDetail()
	{
		$this->layout = "layout1";
		$productid = Yii::$app->request->get("productid");
		$product = Product::find()->where('productid = :id', [':id' => $productid])->asArray()->one();
		$product['pics'] = explode(",",$product['pics']);
		$cateid = $product['cateid'];
		$category_name = Category::find()->where('cateid = :id', [':id' => $cateid])->asArray()->one();
		$product['cate_name'] = $category_name['title'];
		$product['cate_id'] = $category_name['cateid'];
		$category_parent_name = Category::find()->where('cateid = :id', [':id' => $category_name['parentid']])->asArray()->one();
		$product['cate_parent_name'] = $category_parent_name['title'];

		if($product['relation']!=null){
			$relation=$product['relation'];
			$relation = unserialize($relation);
			$res = array_values($relation);
			$l=count($res);
			$resnew = array();
			for($i=0;$i<$l;$i++){
				$resnew[] = Product::find()->where('productid = :id', [':id' => $res[$i]])->asArray()->one();
			}
			return $this->render("detail", ['product' => $product,'resnew' => $resnew,'relation' => $relation]);
		}
		return $this->render("detail", ['product' => $product]);
	}


}