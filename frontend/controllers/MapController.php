<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Map controller
 */
class MapController extends Controller
{
    public $layout = 'main2';
    
    public function actionMap()
    {
        return $this->render('map');
    }

}
