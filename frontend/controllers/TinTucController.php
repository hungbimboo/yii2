<?php 

	namespace frontend\controllers;

	use yii\web\controller;

	/**
	 * 
	 */
	class TinTucController extends Controller
	{
		
		public function actionIndex()
		{
			return $this->render('index');
		}
	}


?>