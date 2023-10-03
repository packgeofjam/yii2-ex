<?php

namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller
{
    public function actionIndex($fio = 'Укажите fio')
    {
        return $fio;
    }

    public function actionAbout()
    {
        return $this->render('about', ['name' => 'cjbncjn']);
    }
}