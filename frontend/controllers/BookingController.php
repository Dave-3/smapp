<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Dashboard controller
 */
class BookingController extends Controller
{
    public $layout = 'dash';
    
    public function actionBooking()
    {
        return $this->render('booking');
    }
   
}
