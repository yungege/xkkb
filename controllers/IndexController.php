<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class IndexController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->getView()->title = "kkkkk";
        
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionError()
    {
        
    }
}
