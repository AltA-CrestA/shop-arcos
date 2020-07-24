<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $phone;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'phone','body'], 'required'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$email => 'Письмо с сайта'])
            ->setSubject('Письмо с сайта — Заполнена форма на странице Контакты')
            ->setHtmlBody("<h1>Заполнена форма на странице Контакты</h1><br><br><h2>ФИО отправителя: $this->name</h2><br><br><h2>Телефон отправителя: $this->phone</h2><br><br><h2>Текст сообщения: $this->body</h2>")
            ->send();
    }
}
