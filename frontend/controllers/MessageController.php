<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Message controller
 */
class MessageController extends Controller
{
    public $layout = 'dash';
    
    public function actionMessage()
    {
        return $this->render('message');
    }
   
}
