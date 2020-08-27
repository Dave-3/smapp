<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Bookmark controller
 */
class BookmarkController extends Controller
{
    public $layout = 'dash';
    
    public function actionBookmark()
    {
        return $this->render('bookmark');
    }
}
