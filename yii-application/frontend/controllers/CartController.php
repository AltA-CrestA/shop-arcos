<?php

namespace frontend\controllers;

use frontend\models\Cart;
use frontend\models\Product;
use Yii;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;

class CartController extends Controller
{

    public function actionIndex()
    {
        $session = Yii::$app->session;

        if (Yii::$app->request->post('order')) {
            return $this->actionOrder();
        } elseif (Yii::$app->request->post('clear')) {
            return $this->clearCart();
        }

        return $this->render('index', [
            'session' => $session,
        ]);
    }

    public function actionAdd()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);

        if (empty($product)) return false;

        $cart = new Cart();
        $cart->addToCart($product);

        return Json::encode([
            'qty' => $_SESSION['cart.qty'],
            'sum' => $_SESSION['cart.sum'],
        ]);
    }

    public function actionDelete($id)
    {
        $cart = new Cart();
        $cart->recalc($id);

        return $this->redirect(['cart/index']);
    }

    protected function actionOrder()
    {
        return $this->render('order');
    }

    protected function clearCart()
    {
        $session = Yii::$app->session;
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');

        return $this->redirect(['cart/index']);
    }

}
