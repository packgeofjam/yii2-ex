<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\CountryForm;
use app\models\MailForm;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $models = Country::find()
            ->all();
        foreach ($models as $model) {
            echo $model->code . '/' . $model->name . '/' . $model->population . '<br>';
        }
        var_dump($models);
        die();

        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    /*public function actionForm()
    {
        $model = new MailForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('form', [
            'model' => $model,
        ]);
    }*/

    public function actionList() {
        $models = Country::find()->all();
        return $this->render('list', ['models' => $models,]);
    }

    public function actionNew() {
        $model = new CountryForm();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            return $this->refresh();
        }
        return $this->render('new', ['model' => $model,]);
    }
}
