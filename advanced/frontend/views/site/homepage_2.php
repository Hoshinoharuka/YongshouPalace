<?php
/**
 *  Team: YongShou Palace
 *  Coding by Liu Xingze 1911439, 
 *            Wu Xinran 1911577,
 *            Wang Zichun 1911575,
 *            Yuan Zhenzhi 1911584,
 *            2021/11/28
 *  frontend page
 */
  use app\models\Agedistribution;
  use app\models\Physicalquality08;
  use app\models\SportNum;
  use frontend\models\MedalPerson;
  use yii\helpers\Html;
  use common\models\Message;
  global $count;
  $count = Message::find()->count()-1;
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Yongshou Palace - Olympics World</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v2.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>digimedia@company.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>010-020-0340</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/222.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Introduction</a></li>
              <li class="scroll-to-section"><a href="#about">China-medals</a></li>
              <li class="scroll-to-section"><a href="#services">Echarts</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Character</a></li>
              <li class="scroll-to-section"><a href="#contact">Comments</a></li> 
              <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Comments</a></div></li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    
      <img src="assets/images/12.jpg" alt="">
  
    <div class="container">
     
      <div class="row">

        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>colorful and interesting</h6>
                    <h2>Olympics Introduction</h2>
                    
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Contact us to send your comment</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              
              <p>Under the guidance of the Olympic Games is the Olympic creed to sports and quadrennial Olympic ceremony, the Olympic Games as the main content, promote people's physical, psychological and social moral all-round development, communication between peoples of mutual understanding and spread all over the world the Olympic creed, the maintenance of world peace of the international social movement. The Olympic Movement includes the ideological system with Olympism as the core, the organizational system with the IOC, ifs and national Olympic Committees as the backbone, and the activity system with the Olympic Games as the cycle.</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/11.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>China Medals</h6>
                  <h4>Proportion Of Medals Of <em>China</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>We showed the distribution of MEDALS won by China at the Olympic Games.</p>
                <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="40">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            35.3%<br>
                            <span>gold</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="40">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            35.1%<br>
                            <span>sliver</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="30">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            29.6%<br>
                            <span>bronze</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Echarts</h6>
            <h4><em>Amazing</em> Olympic Statistics</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Country &amp; Medal
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-02.png" alt=""></span>
                        Personal Medal Rate
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        Increasing Number
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-04.png" alt=""></span>
                        Age Of Athletes
                      </div>
                    </div>
                    <div class="thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Height &amp; Weight
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        Sports &amp; Events
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">

                  


                    <li class="active">
                      <div>
                        <div class="first-thumb">
                          <div class="row">
                              <div id="myecharts1" style="width:1000px; height:500px"></div>
                          </div>
                        </div>
                      </div>
                  </li>

                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                              <div id="Myecharts2" style="width:1000px; height:500px"></div>
                              <div class="col-lg-6 align-self-center">
                                  <div class="left-text">
                                      <h4><em>The athlete who won the most medals --</em>"Micheal Phelps"</h4>
                                      <p>Phelps has the most gold medals of all time at 23, most total medals ever at 28 and the most medals in individual events with 16.</p>
                                  </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                  <div class="right-image">
                                      <img src="assets/images/phelps.jpg" alt="">
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                              <div id="myecharts3" style="width:1000px; height:500px"></div>
                          </div>
                        </div>
                      </div>
                    </li>

                    
                    <li>
                    <h2>Age distribution of athletes in Olympic Games since 1990
</h2>
                      <div>
                        <div class="thumb">
                          <div class="row">
                              <div id="Myecharts5" style="width:1000px; height:500px">
                          </div>
                        </div>
                      </div>
                    </li>
                    </li>

                    <li>
                    <h2>Height and weight distribution of men and women of 2008 Beijing Olympic Games</h2>
                      <div>
                        <div class="thumb">
                          <div class="row">
                              <div id="Myecharts7" style="width:1000px; height:500px">
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                    <h2>The number of events in each sport </h2>
                      <div>
                        <div class="last-thumb">
                            <div class="row">
                                <div id="Myecharts6" style="width:1000px; height:500px">
                                </div>
                            </div>
                        </div>
                     </div>
                    </li>

                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  


  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Characters</h6>
            <h4><em>Outstanding</em> Athletes</h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="https://baike.baidu.com/item/%E5%BC%A0%E7%BB%A7%E7%A7%91/10798169">
                <div class="portfolio-item">
                <div class="thumb" >
                  <img src="assets/images/1.jpg" alt=""  height="280">
                </div>
                <div class="down-content">
                  <h4>Zhang Jike</h4>
                  <span>ping_pong</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="https://baike.baidu.com/item/%E9%A9%AC%E9%BE%99/35974">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/2.jpg" alt="" height="280">
                </div>
                <div class="down-content">
                  <h4>Ma Long</h4>
                  <span>ping_pong</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="https://baike.baidu.com/item/%E8%8B%8F%E7%82%B3%E6%B7%BB/8527768">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/3.jpg" alt="" height="280">
                </div>
                <div class="down-content">
                  <h4>Su Bingtian</h4>
                  <span>running</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="https://baike.baidu.com/item/%E9%83%AD%E6%99%B6%E6%99%B6/965689">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/4.jpg" alt="" height="280">
                </div>
                <div class="down-content">
                  <h4>Guo Jingjing</h4>
                  <span>diving</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="https://baike.baidu.com/item/%E6%9D%A8%E5%80%A9/20722658">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/5.jpg" alt="" height="280">
                </div>
                <div class="down-content">
                  <h4>Yang Qian</h4>
                  <span>shooting</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="https://baike.baidu.com/item/%E6%9D%A8%E8%88%92%E4%BA%88/22382916">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/6.jpg" alt="" height="280">
                </div>
                <div class="down-content">
                  <h4>Yang Shuyu</h4>
                  <span>basketball</span>
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Send Your Comments <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v2.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Recent Comments</h4>
                                        
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
                                                                <h20 class="font-size-10 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    while($model->hide!=0){
                                                                        $count=$count-1;
                                                                        $model=Message::findOne($count);
                                                                    }
                                                                    echo $model->time;
                                                                ?></h20>
                                                                <p class="text-truncate text-dark font-size:20px"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    $model=Message::findOne($count);
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
                                                                            $model=Message::findOne($count);
                                                                            echo $model->email;
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
                                                                <h20 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    while($model->hide!=0){
                                                                        $count=$count-1;
                                                                        $model=Message::findOne($count);
                                                                    }
                                                                    echo $model->time;
                                                                ?></h20>
                                                                <p class="text-truncate text-dark font-size-13"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    $model=Message::findOne($count);
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
                                                                            $model=Message::findOne($count);
                                                                            echo $model->email;
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
                                                                <h20 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    while($model->hide!=0){
                                                                        $count=$count-1;
                                                                        $model=Message::findOne($count);
                                                                    }
                                                                    echo $model->time;
                                                                ?></h20>
                                                                <p class="text-truncate text-dark font-size-13"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    $model=Message::findOne($count);
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
                                                                            $model=Message::findOne($count);
                                                                            echo $model->email;
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
                                                                <h20 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    while($model->hide!=0){
                                                                        $count=$count-1;
                                                                        $model=Message::findOne($count);
                                                                    }
                                                                    echo $model->time;
                                                                ?></h20>
                                                                <p class="text-truncate text-dark font-size-13"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    $model=Message::findOne($count);
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
                                                                            $model=Message::findOne($count);
                                                                            echo $model->email;
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
                                                                <h20 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    while($model->hide!=0){
                                                                        $count=$count-1;
                                                                        $model=Message::findOne($count);
                                                                    }
                                                                    echo $model->time;
                                                                ?></h20>
                                                                <p class="text-truncate text-dark font-size-13"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    $model=Message::findOne($count);
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
                                                                            $model=Message::findOne($count);
                                                                            echo $model->email;
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
                                                                <h20 class="font-size-14 mb-1"><?php
                                                                    $model=Message::findOne($count);
                                                                    while($model->hide!=0){
                                                                        $count=$count-1;
                                                                        $model=Message::findOne($count);
                                                                    }
                                                                    echo $model->time;
                                                                ?></h20>
                                                                <p class="text-truncate text-dark font-size-13"><?php
                                                                    $model=Message::findOne($count);
                                                                    echo $model->message;
                                                                ?></p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end me-3">
                                                                <h6 class="mb-1"><?php
                                                                    $model=Message::findOne($count);
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
                                                                            $model=Message::findOne($count);
                                                                            echo $model->email;
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
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">022-60365167</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">nankai.edu.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">Nankai University</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" readonly="true" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" readonly="true" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" readonly="true" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Please click 'Send Message Now' to  send message. Don't input message here or you will get an error page."  required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="myform-submit" class="main-button " onClick = "buttonClick();">Send Message Now</button>
                        <script>  
                          function buttonClick(){  
                                      self.location = "../web/index.php?r=site%2Fcontact";
                                    }  
                        </script>  
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

 <!-- Scripts -->
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
      var chartDom = document.getElementById('Myecharts5');
      var myChart5 = echarts.init(chartDom);
      var option;

      option = {
          color: ['#80FFA5', '#00DDFF', '#FF0087', '#FFBF00'],
          title: {
          },
          tooltip: {
              trigger: 'axis',
              axisPointer: {
                  type: 'cross',
                  label: {
                      backgroundColor: '#6a7985'
                  }
              }
          },
          legend: {
              data: ['age<=20', '20<age<=30', '30<age<=40', '40<age']
          },
          toolbox: {
              feature: {
                  saveAsImage: {}
              }
          },
          grid: {
              left: '3%',
              right: '4%',
              bottom: '3%',
              containLabel: true
          },
          xAxis: [
              {
                  type: 'category',
                  boundaryGap: false,
                  data: ['1992', '1994', '1996', '1998', '2000', '2002', '2004','2006',
                      '2008','2010','2012','2014','2016']
              }
          ],
          yAxis: [
              {
                  type: 'value'
              }
          ],
          series: [
              {
                  name: 'age<=20',
                  type: 'line',
                  stack: 'Total',
                  smooth: true,
                  lineStyle: {
                      width: 0
                  },
                  showSymbol: false,
                  areaStyle: {
                      opacity: 0.8,
                      color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                          {
                              offset: 0,
                              color: 'rgba(128, 255, 165)'
                          },
                          {
                              offset: 1,
                              color: 'rgba(1, 191, 236)'
                          }
                      ])
                  },
                  emphasis: {
                      focus: 'series'
                  },
                  data: [
                      <?php
                      $model=Agedistribution::findBySql('select * from agedistribution order by year')->all();

                      foreach($model as $item){
                          echo $item->undertwenty.',';

                      }
                      ?>
                  ]
              },
              {
                  name: '20<age<=30',
                  type: 'line',
                  stack: 'Total',
                  smooth: true,
                  lineStyle: {
                      width: 0
                  },
                  showSymbol: false,
                  areaStyle: {
                      opacity: 0.8,
                      color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                          {
                              offset: 0,
                              color: 'rgba(0, 221, 255)'
                          },
                          {
                              offset: 1,
                              color: 'rgba(77, 119, 255)'
                          }
                      ])
                  },
                  emphasis: {
                      focus: 'series'
                  },
                  data: [
                      <?php
                      $model=Agedistribution::findBySql('select * from Agedistribution order by year')->all();

                      foreach($model as $item){
                          echo $item->underthirty.',';

                      }
                      ?>
                  ]
              },
              {
                  name: '30<age<=40',
                  type: 'line',
                  stack: 'Total',
                  smooth: true,
                  lineStyle: {
                      width: 0
                  },
                  showSymbol: false,
                  areaStyle: {
                      opacity: 0.8,
                      color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                          {
                              offset: 0,
                              color: 'rgba(255, 0, 135)'
                          },
                          {
                              offset: 1,
                              color: 'rgba(135, 0, 157)'
                          }
                      ])
                  },
                  emphasis: {
                      focus: 'series'
                  },
                  data: [
                      <?php
                      $model=Agedistribution::findBySql('select * from Agedistribution order by year')->all();

                      foreach($model as $item){
                          echo $item->underfourty.',';

                      }
                      ?>
                  ]
              },
              {
                  name: '40<age',
                  type: 'line',
                  stack: 'Total',
                  smooth: true,
                  lineStyle: {
                      width: 0
                  },
                  showSymbol: false,
                  areaStyle: {
                      opacity: 0.8,
                      color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                          {
                              offset: 0,
                              color: 'rgba(255, 191, 0)'
                          },
                          {
                              offset: 1,
                              color: 'rgba(224, 62, 76)'
                          }
                      ])
                  },
                  emphasis: {
                      focus: 'series'
                  },
                  data: [
                      <?php
                      $model=Agedistribution::findBySql('select * from Agedistribution order by year')->all();

                      foreach($model as $item){
                          echo $item->overfourty.',';

                      }
                      ?>
                  ]
              },

          ]
      };

      option && myChart5.setOption(option);
  </script>





  <script>
      var chartDom6 = document.getElementById('Myecharts6');
      var myChart6 = echarts.init(chartDom6);
      var option6;
      let dataAxis = ['Judo','Speed Skating','Cross Country Skiing','Athletics','Swimming','Badminton','Sailing','Biathlon','Gymnastics','Art Competitions',
          'Alpine Skiing','Weightlifting','Wrestling','Rowing','Fencing','Equestrianism','Shooting','Boxing','Taekwondo','Cycling','Diving','Canoeing',
          'Tennis','Figure Skating','Archery','Table Tennis','Nordic Combined','Freestyle Skiing'
          ,'Snowboarding','Short Track Speed Skating'
      ];
      // prettier-ignore
      let data = [
          <?php
          $model=SportNum::findBySql('select * from sport_num where num>4')->all();

          foreach($model as $item){
              echo $item->num.',';

          }
          ?>
      ];
      let yMax = 500;
      let dataShadow = [];
      for (let i = 0; i < data.length; i++) {
          dataShadow.push(yMax);
      }
      option6 = {
          title: {
              text: '',
              subtext: ''
          },
          xAxis: {
              data: dataAxis,
              axisLabel: {
                  inside: true,
                  color: '#fff'
              },
              axisTick: {
                  show: false
              },
              axisLine: {
                  show: false
              },
              z: 10
          },
          yAxis: {
              axisLine: {
                  show: false
              },
              axisTick: {
                  show: false
              },
              axisLabel: {
                  color: '#999'
              }
          },
          dataZoom: [
              {
                  type: 'inside'
              }
          ],
          series: [
              {
                  type: 'bar',
                  showBackground: true,
                  itemStyle: {
                      color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                          { offset: 0, color: '#FFA07A' },
                          { offset: 0.5, color: '#FF7F50' },
                          { offset: 1, color: '#FF7F50' }
                      ])
                  },
                  emphasis: {
                      itemStyle: {
                          color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [
                              { offset: 0, color: '#FF4500' },
                              { offset: 0.7, color: '#FF4500' },
                              { offset: 1, color: '#FFA07A' }
                          ])
                      }
                  },
                  data: data
              }
          ]
      };
      // Enable data zoom when user click bar.
      const zoomSize = 6;
      myChart6.on('click', function (params) {
          console.log(dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)]);
          myChart6.dispatchAction({
              type: 'dataZoom',
              startValue: dataAxis[Math.max(params.dataIndex - zoomSize / 2, 0)],
              endValue:
                  dataAxis[Math.min(params.dataIndex + zoomSize / 2, data.length - 1)]
          });
      });



      option6 && myChart6.setOption(option6);


  </script>


  <script>
      var chartDom = document.getElementById('Myecharts7');
      var myChart7 = echarts.init(chartDom);
      var option;

      // prettier-ignore
      const femaleData = [
          <?php
          $model=Physicalquality08::findBySql('select * from Physicalquality_08 where Sex="F"')->all();

          foreach($model as $item){
              echo '['.$item->height.','.$item->weight.'],';

          }
          ?>

      ];
      // prettier-ignore
      const maleDeta = [
          <?php
          $model=Physicalquality08::findBySql('select * from Physicalquality_08 where Sex="M"')->all();

          foreach($model as $item){
              echo '['.$item->height.','.$item->weight.'],';

          }
          ?>

      ];
      function calculateAverage(data, dim) {
          let total = 0;
          for (var i = 0; i < data.length; i++) {
              total += data[i][dim];
          }
          return (total /= data.length);
      }
      const scatterOption = (option = {
          xAxis: {
              scale: true
          },
          yAxis: {
              scale: true
          },
          series: [
              {
                  type: 'scatter',
                  id: 'female',
                  dataGroupId: 'female',
                  color: "#FF7F50",
                  universalTransition: {
                      enabled: true,
                      delay: function (idx, count) {
                          return Math.random() * 400;
                      }
                  },
                  data: femaleData
              },
              {
                  type: 'scatter',
                  id: 'male',
                  dataGroupId: 'male',
                  color: "#83bff6",
                  universalTransition: {
                      enabled: true,
                      delay: function (idx, count) {
                          return Math.random() * 400;
                      }
                  },
                  data: maleDeta
              }
          ]
      });
      const barOption = {
          xAxis: {
              type: 'category',
              data: ['Male', 'Female']
          },
          yAxis: {},
          series: [
              {
                  type: 'bar',
                  id: 'total',
                  itemStyle: {
                      normal: {
                          color: function(params) {
                              // 给出颜色组
                              var colorList = ['#83bff6','#FF7F50'];
                              return colorList[params.dataIndex]
                          },
                      }
                  },
                  data: [
                      {
                          value: calculateAverage(maleDeta, 0),
                          groupId: 'male'
                      },
                      {
                          value: calculateAverage(femaleData, 0),
                          groupId: 'female'
                      }
                  ],
                  universalTransition: {
                      enabled: true,
                      seriesKey: ['female', 'male'],
                      delay: function (idx, count) {
                          return Math.random() * 400;
                      }
                  }
              }
          ]
      };
      let currentOption = scatterOption;
      setInterval(function () {
          currentOption = currentOption === scatterOption ? barOption : scatterOption;
          myChart7.setOption(currentOption, true);
      }, 2000);


  </script>

  <script>
      var chartDom = document.getElementById('Myecharts2');
      var myChart2 = echarts.init(chartDom);
      var option;

      option = {
          title: {
              text: '运动员奖牌数比例图',
              // subtext: 'Fake Data',
              left: 'center'
          },
          tooltip: {
              trigger: 'item'
          },
          legend: {
              orient: 'vertical',
              left: 'left'
          },
          series: [
              {
                  name: '奖牌数         人数',
                  type: 'pie',
                  radius: '50%',
                  data: [
                      // { value: 1048, name: 'Search Engine' },
                      <?php
                      //                            $model=Result2::find()->all();
                      $model=MedalPerson::findBySql('select * from medalnum_personnum where medalNum>3')->all();
                      //where(['>','medalNum','1']);
                      foreach($model as $item){
                          echo '{"value":'.$item->athleteNum.',"name":"'.Html::encode($item->medalNum).'枚奖牌"},';
                      }
                      ?>

                  ],
                  emphasis: {
                      itemStyle: {
                          shadowBlur: 10,
                          shadowOffsetX: 0,
                          shadowColor: 'rgba(0, 0, 0, 0.5)'
                      }
                  }
              }
          ]
      };

      option && myChart2.setOption(option);


  </script>

  <script>
      var chartDom = document.getElementById('myecharts1');
      var myChart1 = echarts.init(chartDom);
      var option1;

      const updateFrequency = 2000;
      const dimension = 0;
      const countryColors = {
          Australia: '#00008b',
          Canada: '#f00',
          China: '#ffde00',
          Cuba: '#002a8f',
          Finland: '#003580',
          France: '#ed2939',
          Germany: '#000',
          Iceland: '#003897',
          India: '#f93',
          Japan: '#bc002d',
          'North Korea': '#024fa2',
          'South Korea': '#000',
          'New Zealand': '#00247d',
          Norway: '#ef2b2d',
          Poland: '#dc143c',
          Russia: '#d52b1e',
          Turkey: '#e30a17',
          'United Kingdom': '#00247d',
          'United States': '#b22234'
      };
      $.when(
          $.getJSON('https://cdn.jsdelivr.net/npm/emoji-flags@1.3.0/data.json'),
          $.getJSON('assets/data/result3(4).json')
      ).done(function (res0, res1) {
          const flags = res0[0];
          const data = res1[0];
          const years = [];
          console.log(data);
          for (let i = 0; i < data.length; ++i) {
              if (years.length === 0 || years[years.length - 1] !== data[i][2]) {
                  years.push(data[i][2]);
              }
          }
          function getFlag(countryName) {
              if (!countryName) {
                  return '';
              }
              return (
                  flags.find(function (item) {
                      return item.name === countryName;
                  }) || {}
              ).emoji;
          }
          let startIndex = 10;
          let startYear = years[startIndex];
          option1 = {
              title: {
                  text: '',
                  // subtext: 'Fake Data',
                  left: 'center'
              },
              grid: {
                  top: 10,
                  bottom: 30,
                  left: 150,
                  right: 80
              },
              xAxis: {
                  max: 'dataMax',
                  axisLabel: {
                      formatter: function (n) {
                          return Math.round(n) + '';
                      }
                  }
              },
              dataset: {
                  source: data.slice(4).filter(function (d) {
                      return d[2] === startYear;
                  })
              },
              yAxis: {
                  type: 'category',
                  inverse: true,
                  max: 10,
                  axisLabel: {
                      show: true,
                      fontSize: 14,
                      formatter: function (value) {
                          return value + '{flag|' + getFlag(value) + '}';
                      },
                      rich: {
                          flag: {
                              fontSize: 25,
                              padding: 5
                          }
                      }
                  },
                  animationDuration: 300,
                  animationDurationUpdate: 300
              },
              series: [
                  {
                      name:'',
                      realtimeSort: true,
                      seriesLayoutBy: 'column',
                      type: 'bar',
                      itemStyle: {
                          color: function (param) {
                              return countryColors[param.value[1]] || '#5470c6';
                          }
                      },
                      encode: {
                          x: dimension,
                          y: 5
                      },
                      label: {
                          show: true,
                          precision: 1,
                          position: 'right',
                          valueAnimation: true,
                          fontFamily: 'monospace'
                      }
                  }
              ],
              // Disable init animation.
              animationDuration: 100,
              animationDurationUpdate: updateFrequency,
              animationEasing: 'linear',
              animationEasingUpdate: 'linear',
              graphic: {
                  elements: [
                      {
                          type: 'text',
                          right: 160,
                          bottom: 60,
                          style: {
                              text: startYear,
                              font: 'bolder 80px monospace',
                              fill: 'rgba(100, 100, 100, 0.25)'
                          },
                          z: 100
                      }
                  ]
              }
          };
          myChart1.setOption(option1);
          for (let i = startIndex;i < years.length - 1; ++i) {
              (function (i) {
                  setTimeout(function () {
                      updateYear(years[i + 1]);
                  }, (i - startIndex) * updateFrequency);
              })(i);
              if(i===years.length - 1){
                  let i=startIndex;
              }

          }
          function updateYear(year) {
              let source = data.slice(4).filter(function (d) {
                  return d[2] === year;
              });
              option1.series[0].data = source;
              option1.graphic.elements[0].style.text = year;
              myChart1.setOption(option1);
          }
      });

      option1 && myChart1.setOption(option1);


  </script>
  <script type="text/javascript">
      $(function () {
          var chartDom = document.getElementById('myecharts3');
          var myChart3 = echarts.init(chartDom);
          var option;
          var URL="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fwww.npc.gov.cn%2Fnpc%2Folmpic%2Fattachement%2Fjpg%2Fsite1%2F20080826%2F001a6b603bc60a1de8b613.jpg&refer=http%3A%2F%2Fwww.npc.gov.cn&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1640670191&t=b71d02a46d2963030b56dea30f04358f"
          var beginYear = 1896;
          var endYear = 2016;
          var lineCount = 12;
          $.when(
              $.getJSON('assets/data/participantperyear.json')
          ).done(function (res0) {
              var data=res0;
              var temp1=[];
              var temp2=[];
              temp1.push(data[0][0]/5);
              temp2.push(-data[0][0]/5);
              option = {
                  color: ['#e54035'],
                  xAxis: {
                      axisLine: {show: false},
                      axisLabel: {show: false},
                      axisTick: {show: false},
                      splitLine: {show: false},
                      name: beginYear,
                      nameLocation: 'middle',
                      nameGap: 40,
                      nameTextStyle: {
                          color: 'green',
                          fontSize: 30,
                          fontFamily: 'Arial'
                      },
                      min: -2800,
                      max: 2800
                  },
                  yAxis: {
                      data: makeCategoryData(),
                      show: false
                  },
                  grid: {
                      top: 'center',
                      height: 280
                  },
                  series: [
                      {
                          name: 'all',
                          type: 'pictorialBar',
                          symbol: 'image://' + URL,
                          symbolSize: [20, 20],
                          symbolRepeat: true,
                          data: temp1,
                          animationEasing: 'elasticOut'
                      },{
                          name: 'all',
                          type: 'pictorialBar',
                          symbol: 'image://' + URL,
                          symbolSize: [20, 20],
                          symbolRepeat: true,
                          data: temp2,
                          animationEasing: 'elasticOut'
                      }]
              };
              function makeCategoryData() {
                  var categoryData = [];
                  for (var i = 0; i < lineCount; i++) {
                      categoryData.push(i + 'a');
                  }
                  return categoryData;
              }
              var currentYear = beginYear;
              setInterval(function () {
                  currentYear+=4;
                  if (currentYear > endYear) {
                      currentYear = beginYear;
                      temp1 = [];
                      temp1.push(data[0][0]/5);
                      temp2 = [];
                      temp2.push(-data[0][0]/5);
                  }
                  var oGap=(currentYear-beginYear)/4;
                  if(oGap<12)
                  {
                      temp1.push(data[oGap][0]/5);
                      temp2.push(-data[oGap][0]/5);
                  }
                  else
                  {
                      temp1[oGap%12]+=data[oGap][0]/5;
                      temp2[oGap%12]+=-data[oGap][0]/5;
                  }
                  myChart3.setOption({
                      xAxis: {
                          name: currentYear
                      },
                      series: [{
                          data: temp1
                      }, {
                          data: temp2
                      }]
                  });
              }, 800);
              option && myChart3.setOption(option);
          },'json')
      })
  </script>


</body>
</html>

