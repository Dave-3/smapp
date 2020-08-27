<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Listing controller
 */
class ListingController extends Controller
{
    public $layout = 'dash';
    
    public function actionActive()
    {
        return $this->render('active');
    }
    
    public function actionPending()
    {
        return $this->render('active');
    }
    
    public function actionExpired()
    {
        return $this->render('expired');
    }
    
}
