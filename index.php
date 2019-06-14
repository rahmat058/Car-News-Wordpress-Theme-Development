<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="CarCare  -  Car Repairing  and Servicing Html Template Responsive Template">
    <meta name="keywords" content="Repair ,Servicing ,Mechanic">
    <meta name="author" content="Theme Moor">
    <!-- Page Title -->
    <title>Car Care | Responsive HTML5 Template 1.1.0</title>
    <!-- Apple Touch Icons &Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.html">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">
    <!-- Master css File Here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/master.css">

		<!-- Custom Css File Here -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
		
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

		<?php wp_head(); ?>
</head>

<body class="home">
    <!-- start preloader -->
    <div id="preLoaderBox">
        <div id="preLoaderBoxStatus"></div>
    </div>

    <!-- End preloader -->
    <!-- header start area -->
    <header id="header_area" class="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="header_top_bar_content">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-9 company">
                            <div class="company-info">
                                <ul>
                                    <li><i class="flaticon-close-envelope"></i><a href="#">example@gmail.com</a></li>
                                    <li><i class="flaticon-telephone"></i><a href="#">(000)-000-0000</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3 social">
                            <div class="header-top-search">
                                <form action="#">
                                    <input type="text" placeholder="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_area">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo">
                            <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""></a>
                            <div class="responsive-menu"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="nav-wrapper">
                                <nav class="main-navigation">
                                    <ul class="main-menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">about us</a> </li>
                                        <li><a href="contact-us">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

    <!--Main Slider-->
    <section id="home-slider-v1" class="slider-v1">
        <div class="main-slider-v1 owl-item">
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-1.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-2.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-3.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-4.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image:url(<?php echo get_template_directory_uri();?>/images/resource/home-slide-5.jpg);">
                <div class="overlay"></div>
                <div class="slide-description">
                    <div class="animate-item">
                        <h2>Welcome to Our Car Care House!!!</h2>
                    </div>
                    <div class="animate-item">
                        <h3>Top One Car Care in your city with very good quality Engr.</h3>
                    </div>
                    <div class="animate-item">
                        <a class="btn-1 btn btn-primary" href="#">Contact</a>
                        <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider End -->


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri();?>/images/resource/blog-1.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i> Jan 28, 2017 </li>
                                                <li><i class="fa fa-comment"></i> 2 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html">Benefits of Chiropractic Care </a></h3>
                                        <div class="text-des">
                                        <p>
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> Jan 28, 2017</a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri();?>/images/resource/blog-2.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i> Jan 28, 2017 </li>
                                                <li><i class="fa fa-comment"></i> 2 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html">Benefits of Chiropractic Care </a></h3>
                                        <div class="text-des">
                                        <p>
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> Jan 28, 2017</a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri();?>/images/resource/blog-3.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i> Jan 28, 2017 </li>
                                                <li><i class="fa fa-comment"></i> 2 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html">Benefits of Chiropractic Care </a></h3>
                                        <div class="text-des">
                                        <p>
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> Jan 28, 2017</a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri();?>/images/resource/blog-4.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i> Jan 28, 2017 </li>
                                                <li><i class="fa fa-comment"></i> 2 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html">Benefits of Chiropractic Care </a></h3>
                                        <div class="text-des">
                                        <p>
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> Jan 28, 2017</a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri();?>/images/resource/blog-5.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i> Jan 28, 2017 </li>
                                                <li><i class="fa fa-comment"></i> 2 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html">Benefits of Chiropractic Care </a></h3>
                                        <div class="text-des">
                                        <p>
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> Jan 28, 2017</a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
                                        <a href=""><img class="img-responsive transition7s" src="<?php echo get_template_directory_uri();?>/images/resource/blog-5.jpg" alt=""></a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Admin</li>
                                                <li><i class="fa fa-calendar"></i> Jan 28, 2017 </li>
                                                <li><i class="fa fa-comment"></i> 2 Comments</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="news-single.html">Benefits of Chiropractic Care </a></h3>
                                        <div class="text-des">
                                        <p>
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                            The Act makes provision for the interpretation of Acts of Parliament, Measures of the General Synod of the Church of England, Measures of the Church Assembly.
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> Jan 28, 2017</a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="news-single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pagination-area tac">
                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="disabled"><a aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <input class="search-field" placeholder="Search" value="" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                                <li><a href="#">Higher Education<span>(15)</span></a></li>
                                <li><a href="#">Healthcare <span>(112)</span></a></li>
                                <li><a href="#">Senior Living <span>(4)</span></a></li>
                                <li><a href="#">Commercial <span>(14)</span></a></li>
                                <li><a href="#">Speciality <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <li><a href="#">January 2017 <span>(15)</span></a></li>
                                <li><a href="#">Februaty 2017 <span>(112)</span></a></li>
                                <li><a href="#">March 2017 <span>(4)</span></a></li>
                                <li><a href="#">April 2017<span>(14)</span></a></li>
                                <li><a href="#">May 2017 <span>(90)</span></a></li>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">RECENT NEWS</h4>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-1.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-2.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="widget-news">
                                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-3.jpg" alt=""></a>
                                <div class="news-text">
                                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                                    <a class="" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition7s" href="#">HTML</a></li>
                                <li><a class="transition7s" href="#">CSS3</a></li>
                                <li><a class="transition7s" href="#">PHP</a></li>
                                <li><a class="transition7s" href="#">Wordpress</a></li>
                                <li><a class="transition7s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /news table  -->
    <div id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="subs-title">Subscribe to news letter :</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="subcrb-form">
                    <form class="subscription registerForm">
                        <div class="input-group">
                            <input type="email" name="formInput[email]" value="" class="form-control" placeholder="Your Email:" required="" title="valid email is required" id="emaill">
                            <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit" value="submit" id="submit-btn"><i class="fa fa-paper-plane-o"></i></button>
                          </span>
                        </div>
                        <input type="hidden" name="action" value="submitform">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--=== Right Fixed Appiontment Form ===-->
    <div id="appiontment-now-box">
        <p class="toggle">APPOINTMENT</p>
        <div class="appiontment-now ">
            <div class="appiontment-form">
                <p>Instant online Appiontment</p>
                <form name="contact_us_popup" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Vehicle Registration Num* " class="form-control required" name="subject" id="reg1" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                    </div>
                    <div class="form-group tac">
                        <button class="btn btn-primary transition7s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===/ Right Fixed Appiontment Form ===-->
    <!-- Footer
    ============================================= -->
    <div id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 tac">
                    <div class="emergency-call mrb-50">
                        <span class="emergency-icon"><i class="flaticon-office-telephone"></i></span>
                        <span class="des">For emergency cases</span>
                        <span class="phone">0-000-000-0000</span>
                        <div class="underline_sep"><i class="fa fa-car"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Car Care </h2>
                        <p>Lorem ipsum dolor sit amet, consecting elit, sed diam nonummy nibhnt.</p>
                        <ul class="get-tuch">
                            <li><i class="fa fa-map-marker"></i> House 248/1, Road No-27, Nirala R/A, Khulna, Khulna-9200.</li>
                            <li><i class="fa fa-phone-square"></i> Mobile: <a href="#">+001911 - 467325</a></li>
                            <li><i class="fa fa-envelope"></i> Email: <a href="#">info@domain.com</a></li>
                        </ul>
                        <div class="social-icon">
                            <ul>
                                <li class="transition7s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="transition7s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="transition7s"><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li class="transition7s"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Our Services</h2>
                        <ul>
                            <li><a href="#">Car repair and change service</a></li>
                            <li><a href="#">Car selling and buying service</a></li>
                            <li><a href="#">Test driving and speed test</a></li>
                            <li><a href="#">Car cleaning and washing</a></li>
                            <li><a href="#">Yearly car inspection view</a></li>
                            <li><a href="#">Car selling and buying service</a></li>
                            <li><a href="#">Test driving and speed test</a></li>
                            <li><a href="#">Car cleaning and washing</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Our Support</h2>
                        <ul>
                            <li><a href="#">Customer testimonials</a></li>
                            <li><a href="#">Get a free quote</a></li>
                            <li><a href="#">Help &amp; Support Center</a></li>
                            <li><a href="#">How to get started?</a></li>
                            <li><a href="#">Frequently asked questions</a></li>
                            <li><a href="#">Get a free quote</a></li>
                            <li><a href="#">Help &amp; Support Center</a></li>
                            <li><a href="#">How to get started?</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Get In Tuch</h2>
                        <form id="footer-contact-form-us" name="footer-contact-form-us" class="" method="post" action="contact.php">
                            <div class="form-group">
                                <input type="text" class="form-control required name" name="name" placeholder="Name" aria-required="true" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control required name" name="email" placeholder="Email" aria-required="true" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control required" rows="3" placeholder="Message" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer  -->

    <!-- copyright
    ============================================= -->
    <div id="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="copyright">
                        <p>&copy; Copyright 2017, All Rights Reserved. <span> A Product Design by <a href="http://thememoor.com"> Theme Moor</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copyright   -->
    <a href="#" id="scrollTopButton">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- Footer Scripts Area -->
    <!-- All JS File Here -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.2.4.min.js"></script>
    <!-- Bootstrap Min Js File -->
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <!--  wow Js File  -->
    <script src="<?php echo get_template_directory_uri();?>/js/wow.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- jquery ui -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-ui.min.js"></script>
    <!-- jquery Counter -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.counterup.min.js"></script>
    <!-- hero menu -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/accordian-a2r.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.meanmenu.js"></script>
    <!-- Skillbar -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/skill.bars.jquery.js"></script>
    <!-- mixit-up -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.filterizr.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/filterize-controls.js"></script>
    <!-- magnific-popup -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.magnific-popup.min.js"></script>
    <!-- Custom JS File -->
    <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>

		<?php wp_footer(); ?>
</body>

</html>