<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Dashboard controller
 */
class DashboardController extends Controller
{
    public $layout = 'dash';
    
    public function actionPanel()
    {
        return $this->render('dashboard');
    }

}
