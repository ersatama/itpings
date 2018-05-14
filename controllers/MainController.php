<?php

namespace app\controllers;

// use Yii;
// use yii\filters\AccessControl;
use yii\web\Controller;
// use yii\web\Response;
// use yii\filters\VerbFilter;
// use app\models\LoginForm;
// use app\models\ContactForm;

class MainController extends Controller {
/*	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }*/
	public function actionIndex($id = 0) {
		$this->layout = 'basic';
        $this->view->title = 'INDEX !';
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'index page']);
		return $this->render('index',['wow'=>'wow','id'=>$id]);
	}
}

?>