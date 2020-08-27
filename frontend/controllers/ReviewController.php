<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Review controller
 */
class ReviewController extends Controller
{
    public $layout = 'dash';
    
    public function actionReview()
    {
        return $this->render('review');
    }
}
