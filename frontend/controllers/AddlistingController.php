<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * AddListing controller
 */
class AddlistingController extends Controller
{
    public $layout = 'dash';

    public function actionAddListing()
    {
        return $this->render('add-listing');
    }
}
