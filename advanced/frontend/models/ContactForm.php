<?php
/**
 *  Team: YongShou Palace
 *  Coding by Liu Xingze 1911439, 2021/11/28
 *  save message in db
 */
namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Message;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
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
        $message = new Message();
        $message->name = $this->name;
        $message->email = $this->email;
        $message->message = $this->body;
        // $message->time = date("Y-m-d H:i:s",time());
        $message->id = Message::findBySql('select * from Message ')->count();
        $message->hide = 0;
        return $message->save();
    }
}
