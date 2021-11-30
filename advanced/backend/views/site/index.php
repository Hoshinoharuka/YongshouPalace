<?php
/**
 * Team:Yongshou Palace, NKU
 * Coding by Yuan Zhenzhi, 2021/11/27
 */

use app\models\Message;
use app\models\User;
use yii\helpers\Url;
use yii\helpers\html;
global $count;
$count=Message::find()->count()-1;
?>
<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Dashboard | Yongshou Palace Backend</title>
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

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
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

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"><a href="https://github.com/Hoshinoharuka/YongshouPalace">Github link</a></h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">All messages</span>
                                                <h4 class="mb-3">
                                                    <?php
                                                        echo $count+1;
                                                    ?>
                                                </h4>
                                            </div>
    
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="ms-1 text-muted font-size-13">Since origin(include tests)</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Users</span>
                                                <h4 class="mb-3">
                                                    <?php
                                                        $usernum=User::find()->count();
                                                        echo $usernum;
                                                    ?>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="ms-1 text-muted font-size-13">Include normal users</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">New Message</span>
                                                <h4 class="mb-3">
                                                    <?php
                                                        $new=Message::findBySql('SELECT * from message where time BETWEEN CURDATE() and CURDATE()+1')->count();
                                                        echo $new;
                                                    ?>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">+<?php
                                                        $new=Message::findBySql('SELECT * from message where time BETWEEN CURDATE() and CURDATE()+1')->count();
                                                        echo $new;
                                                    ?></span>
                                            <span class="ms-1 text-muted font-size-13">New Message Today</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">New Users</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="0">0</span>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div><!-- end row-->

                        <div class="row">

                        <div class="col-md-6 col-xl-3">

                            <div class="card">
                                <img class="card-img-top img-fluid" src="static/picture/img-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Yongshou Palace(永寿宫)</h4>
                                    <p class="card-text">The name of Yongshou Palace comes from the Legend of Zhen Huan. 
                                    I hope we can survive the intense homework day and night in this semester.</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Hello world</li>
                                    <li class="list-group-item">By some sincere programmers</li>
                                </ul>
                            </div>

                        </div><!-- end col -->

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Message</h4>
                            
                                    </div><!-- end card header -->

                                    <div class="card-body px-0">
                                        <div class="px-3" data-simplebar="" style="max-height: 352px;">
                                            <ul class="list-unstyled activity-wid mb-0">

                                                <li class="activity-list activity-border">
                                                    <div class="activity-icon avatar-md">
                                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                                    </div>
                                                    <div class="timeline-list-item">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->time;
                                                                ?></h5>
                                                                <p class="text-truncate text-muted font-size-13"><?php
                                                                    //$model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    //$model=Message::findOne($count);
                                                                    echo $model->name;
                                                                ?></h6>
                                                            </div>

                                                            <div class="flex-shrink-0 text-end">
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>
                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"><?php
                                                                            //$model=Message::findOne($count);
                                                                            echo $model->email;
                                                                        ?></a>
                                                                        <a class="dropdown-item" href="#">hide:<?php
                                                                            //$model=Message::findOne($count);
                                                                            echo $model->hide;
                                                                            $count=$count-1;
                                                                        ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>

                                                <li class="activity-list activity-border">
                                                    <div class="activity-icon avatar-md">
                                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                                    </div>
                                                    <div class="timeline-list-item">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    // while($model->hide!=0){
                                                                    //     $count=$count-1;
                                                                    //     $model=Message::findOne($count);
                                                                    // }
                                                                    echo $model->time;
                                                                ?></h5>
                                                                <p class="text-truncate text-muted font-size-13"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->name;
                                                                ?></h6>
                                                            </div>

                                                            <div class="flex-shrink-0 text-end">
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>
                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"><?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->email;
                                                                        ?></a>
                                                                        <a class="dropdown-item" href="#">hide:<?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->hide;
                                                                            $count=$count-1;
                                                                        ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>

                                                <li class="activity-list activity-border">
                                                    <div class="activity-icon avatar-md">
                                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                                    </div>
                                                    <div class="timeline-list-item">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    // while($model->hide!=0){
                                                                    //     $count=$count-1;
                                                                    //     $model=Message::findOne($count);
                                                                    // }
                                                                    echo $model->time;
                                                                ?></h5>
                                                                <p class="text-truncate text-muted font-size-13"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->name;
                                                                ?></h6>
                                                            </div>

                                                            <div class="flex-shrink-0 text-end">
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>
                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"><?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->email;
                                                                        ?></a>
                                                                        <a class="dropdown-item" href="#">hide:<?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->hide;
                                                                            $count=$count-1;
                                                                        ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>
            
                                                <li class="activity-list activity-border">
                                                    <div class="activity-icon avatar-md">
                                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                                    </div>
                                                    <div class="timeline-list-item">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    // while($model->hide!=0){
                                                                    //     $count=$count-1;
                                                                    //     $model=Message::findOne($count);
                                                                    // }
                                                                    echo $model->time;
                                                                ?></h5>
                                                                <p class="text-truncate text-muted font-size-13"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->name;
                                                                ?></h6>
                                                            </div>

                                                            <div class="flex-shrink-0 text-end">
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>
                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"><?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->email;
                                                                        ?></a>
                                                                        <a class="dropdown-item" href="#">hide:<?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->hide;
                                                                            $count=$count-1;
                                                                        ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>

                                                <li class="activity-list activity-border">
                                                    <div class="activity-icon avatar-md">
                                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                                    </div>
                                                    <div class="timeline-list-item">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    // while($model->hide!=0){
                                                                    //     $count=$count-1;
                                                                    //     $model=Message::findOne($count);
                                                                    // }
                                                                    echo $model->time;
                                                                ?></h5>
                                                                <p class="text-truncate text-muted font-size-13"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->name;
                                                                ?></h6>
                                                            </div>

                                                            <div class="flex-shrink-0 text-end">
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>
                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"><?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->email;
                                                                        ?></a>
                                                                        <a class="dropdown-item" href="#">hide:<?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->hide;
                                                                            $count=$count-1;
                                                                        ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>

                                                <li class="activity-list">
                                                    <div class="activity-icon avatar-md">
                                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                                        <i class="bx bx-bitcoin font-size-24"></i>
                                                        </span>
                                                    </div>
                                                    <div class="timeline-list-item">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    // while($model->hide!=0){
                                                                    //     $count=$count-1;
                                                                    //     $model=Message::findOne($count);
                                                                    // }
                                                                    echo $model->time;
                                                                ?></h5>
                                                                <p class="text-truncate text-muted font-size-13"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    // $model=Message::findOne($count);
                                                                    echo $model->name;
                                                                ?></h6>
                                                            </div>

                                                            <div class="flex-shrink-0 text-end">
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="mdi mdi-dots-vertical"></i>
                                                                    </a>
                
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item"><?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->email;
                                                                        ?></a>

                                                                        <a class="dropdown-item" href="#">hide:<?php
                                                                            // $model=Message::findOne($count);
                                                                            echo $model->hide;
                                                                            $count=$count-1;
                                                                        ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </li>
                                            </ul>
                                        </div>    
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                                    <div class="col-xl-4">
                                        <!-- card -->
                                        <div class="card bg-primary text-white shadow-primary card-h-100">
                                            <!-- card body -->
                                            <div class="card-body p-0">
                                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">                                                   
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-currency-btc"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Olympic</b> Games</h4>
                                                                <p class="text-white-50 font-size-13"> Under the guidance of the Olympic Games is the Olympic creed to sports and quadrennial Olympic ceremony, the Olympic Games as the main content, promote people's physical, psychological and social moral all-round development, communication between peoples of mutual understanding and spread all over the world the Olympic creed, the maintenance of world peace of the international social movement. The Olympic Movement includes the ideological system with Olympism as the core, the organizational system with the IOC, ifs and national Olympic Committees as the backbone, and the activity system with the Olympic Games as the cycle. </p>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    <span class="avatar-title rounded-circle bg-soft-light text-white font-size-24">
                                                                        <i class="mdi mdi-ethereum"></i>
                                                                    </span>
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Winter</b> Games</h4>
                                                                <p class="text-white-50 font-size-13"> The Olympic Winter Games are called the Olympic Winter Games. Mainly held by the world region, is the world's largest comprehensive winter games, held every four years, since 1994 and the Summer Olympic Games interchangeably held. The participating countries are mainly distributed around the world, including Europe, Africa, America, Asia and Oceania. It is hosted by the International Olympic Committee. The number of sessions shall be calculated according to the actual number of sessions.The 1992 Winter Games were the last winter Games to be held in the same year as the Summer Games. The first edition was held in 1924, and 23 editions have been held every four years until 2018. </p>
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                    </div>
                                                    <!-- end carousel-inner -->
                                                    
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    </div>
                                                    <!-- end carousel-indicators -->
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->

                            <!-- end col -->


                        
                        </div> <!-- end row-->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar="" class="h-100">
                <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                    <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

                </div>

                <!-- Settings -->
                <hr class="m-0">

                <div class="p-4">
                    <h6 class="mb-3">Layout</h6>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                        <label class="form-check-label" for="layout-vertical">Vertical</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                        <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
                        <label class="form-check-label" for="layout-mode-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                        <label class="form-check-label" for="layout-mode-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                        <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                        <label class="form-check-label" for="layout-position-fixed">Fixed</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                        <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                        <label class="form-check-label" for="topbar-color-light">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                        <label class="form-check-label" for="topbar-color-dark">Dark</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                        <label class="form-check-label" for="sidebar-size-default">Default</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                        <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                        <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                        <label class="form-check-label" for="sidebar-color-light">Light</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                        <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                    </div>
                    <div class="form-check sidebar-setting">
                        <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                        <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                    </div>

                    <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                        <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                        <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                    </div>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Minia.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

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
