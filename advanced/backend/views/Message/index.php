<?php
/**
 * Team:Yongshou Palace, NKU
 * Coding by Yuan Zhenzhi, 2021/11/27
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Messages');
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


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item right-bar-toggle me-2">
                            <i data-feather="settings" class="icon-lg"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= Yii::$app->user->identity->username ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item",href="<?php echo Url::to(['site/logout']) ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i><li> <?php 
                                    echo Html::beginForm(['/site/logout'], 'post');
                                    echo Html::submitButton('Logout',['class' => 'btn btn-link logout']);
                                    echo Html::endForm();
                                ?></li></a>
                            </div>
                        </div>

                </div>
            </div>
        </header>
    <div class="main-content">

        <div class="page-content">
            <div class="message-index">

                <p>
                    <?= Html::a(Yii::t('app', 'Create Message'), ['create'], ['class' => 'btn btn-success']) ?>
                </p>

                <?php Pjax::begin(); ?>
                <?php echo $this->render('_search', ['model' => $searchModel]); ?>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    // 'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'name',
                        'email:email',
                        'message',
                        'time',
                        'id',
                        'hide',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>

                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
    
    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar="" class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" data-key="t-menu">Menu</li>

                            <li>
                                <a href="<?php echo Url::to(['site/index']) ?>">
                                    <i data-feather="home"></i>
                                    <span data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="users"></i>
                                    <span data-key="t-authentication">Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo Url::to(['message/index']) ?>">
                                            <span data-key="t-calendar">Find Message</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo Url::to(['message/create']) ?>">
                                            <span data-key="t-chat">Create Message</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo Url::to(['message/select']) ?>">
                                            <span data-key="t-chat">Select Message</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i data-feather="grid"></i>
                                    <span data-key="t-apps">Homework</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo Url::to(['site/workyzz']) ?>">
                                            <span data-key="t-calendar">Yuan Zhenzhi</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo Url::to(['site/workwzc']) ?>">
                                            <span data-key="t-chat">Wang Zichun</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo Url::to(['site/workwxr']) ?>">
                                            <span data-key="t-chat">Wu Xinran</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo Url::to(['site/worklxz']) ?>">
                                            <span data-key="t-chat">Liu Xingze</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
    <!-- Left Sidebar End -->
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

