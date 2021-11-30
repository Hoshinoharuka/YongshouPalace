<?php
namespace backend\controllers;
/**
 *  Team: YongShou Palace
 *  Coding by Yuan Zhenzhi 1911584, 2021/11/20
 */

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\SignupForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','workyzz','workwzc','worklxz','workwxr','index','signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest){
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            } else {
                $model->password = '';

                return $this->renderPartial('login', [
                    'model' => $model,
                ]);
            }
        }else{
            return $this->renderpartial('index');    
        }
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->renderPartial('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->renderPartial('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        $model = new LoginForm();
        return $this->renderPartial('login', [
            'model' => $model,
        ]);
    }

    /**
     * display yzz-work
     */
    public function actionWorkyzz(){
        return $this->renderPartial('workyzz');
    }

    /**
     * display wxr-work
     */
    public function actionWorkwxr(){
        return $this->renderPartial('workwxr');
    }

    /**
     * display wzc-work
     */
    public function actionWorkwzc(){
        return $this->renderPartial('workwzc');
    }

    /**
     * display lxz-work
     */
    public function actionWorklxz(){
        return $this->renderPartial('worklxz');
    }

}
