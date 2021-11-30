<?php
/**
 *  Team: YongShou Palace
 *  Coding by Yuan Zhenzhi 1911584, 2021/11/28
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Dashboard | YongShou Palace Backend</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">

        <!-- plugin css -->
        <link href="static/css/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">

        <!-- preloader css -->
        <link rel="stylesheet" href="static/css/preloader.min.css" type="text/css">

        <!-- Bootstrap Css -->
        <link href="static/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="static/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="static/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    </head>

    <body>

    <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="static/picture/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="static/picture/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Yongshou Palace</span>
                                </span>
                            </a>

                            <a href="" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="static/picture/logo-sm.svg" alt="" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="static/picture/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Yongshou Palace</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>



                </div>
            </div>
        </header>
    <div class="main-content">

        <div class="page-content">
        <div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        We are gald to receive your comment.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
        </div>
    </div>
    
            <!-- JAVASCRIPT -->
        <script src="static/js/jquery.min.js"></script>
        <script src="static/js/bootstrap.bundle.min.js"></script>
        <script src="static/js/metisMenu.min.js"></script>
        <script src="static/js/simplebar.min.js"></script>
        <script src="static/js/waves.min.js"></script>
        <script src="static/js/feather.min.js"></script>
        <!-- pace js -->
        <script src="static/js/pace.min.js"></script>

        <!-- apexcharts -->
        <script src="static/js/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="static/js/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="static/js/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="static/js/dashboard.init.js"></script>

        <script src="static/js/app.js"></script>
    </body>
</html>

