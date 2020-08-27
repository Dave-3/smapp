<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Profile controller
 */
class ProfileController extends Controller
{
    public $layout = 'dash';
    
    public function actionProfile()
    {
        return $this->render('profile');
    }
}
