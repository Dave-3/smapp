<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Map controller
 */
class DetailController extends Controller
{
    public $layout = 'detail';
    
    public function actionDetail()
    {
        return $this->render('index');
    }

}
