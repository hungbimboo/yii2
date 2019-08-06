<?php 

	namespace frontend\controllers;

	use yii\web\controller;

	/**
	 * 
	 */
	class DemoController extends Controller
	{
		
		public function actionIndex()
		{
			return $this->render('index');
		}
	}


?>