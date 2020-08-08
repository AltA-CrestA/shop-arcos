<?php
namespace frontend\controllers;

use frontend\models\Category;
use Yii;
use yii\web\Controller;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $condition = ['status' => Yii::$app->params['enableStatus']];
        $categoryList = Category::find()->where($condition)->orderBy('id')->all();

        return $this->render('index', [
            'categoryList' => $categoryList,
        ]);
    }


    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                $session = Yii::$app->session->setFlash('success', 'Спасибо за обращение. Мы свяжемся с вами в ближайшее время.');
            } else {
                $session = Yii::$app->session->setFlash('error', 'Возникла ошибка при отправки сообщения.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
                'session' => $session,
            ]);
        }
    }

    public function actionModal()
    {
        $errors = array();
        $success = array();
        $failure = array();
        if (trim($_POST['name-popup']) == '') {
            $errors[] = 'Укажите Имя';
        }
        if (trim($_POST['phone-popup']) == '') {
            $errors[] = 'Укажите номер телефона';
        }
        if (empty($errors)) {
            $name = $_POST['name-popup'];
            $phone = $_POST['phone-popup'];
            $this->sendEmail(Yii::$app->params['adminEmail'], $name, $phone);
            $success = 'Спасибо, наш специалист свяжется с вами в ближайшее время!';
        } else {
            foreach($errors as $error) {
                $failure[] .= "$error<br/>";
            }
        }

        return json_encode(array(
            'success' => $success,
            'failure' => $failure
        ));
    }

    protected function sendEmail($email, $name, $phone)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$email => 'Письмо с сайта'])
            ->setSubject('Письмо с сайта — Заполнена форма обратного звонка')
            ->setHtmlBody("<h1>Заполнена форма обратного звонка</h1><br><br><h2>Имя отправителя: $name</h2><br><br><h2>Телефон отправителя: $phone</h2>")
            ->send();
    }

}
