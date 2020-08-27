<?php
namespace frontend\controllers;


use yii\web\Controller;


/**
 * Wallet controller
 */
class WalletController extends Controller
{
    public $layout = 'dash';
    
    public function actionWallet()
    {
        return $this->render('wallet');
    }
    
}
