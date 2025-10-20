<?php

namespace app\controllers;

use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller {

  public function actionIndex() {

    //creates a ActiveQuery query object, which provides methods to access data from the country table.
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
      'pagination' => $pagination
    ]);

  }


}