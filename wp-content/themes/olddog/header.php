<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta charset="utf-8">
    
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/jquery.formstyler.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/media.css" rel="stylesheet" type="text/css">
    
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.hoverIntent.minified.js"></script>
    <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/js/jquery.dcjqaccordion.2.7.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> 

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  
    <![endif]-->
    <?php wp_head(); ?>

</head>
 
<body>  
    <div class="main"> 
        
        <header class="header">
            <div class="head_top">
                <div class="cent clearfix">
                   
                    <div class="lg">ДомРыбака — рыболовный интернет-магазин</div>
                    
                    <div class="menu_top">
                    <?php
                        $args = array(
                        'theme_location'  => '',
                        'menu'            => 'Верхнее меню', 
                        'container'       => flase, 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'depth'           => 0
                    );
                    wp_nav_menu($args ); 
                    ?>

                    </div>
                    
                    <div class="auth"><a href="#" class="login">Войти</a>  или  <a href="#">зарегистрироваться</a></div>
                    
                    <div class="btn_menu_mobile icon-menu"></div>
                    
                </div>
            </div><!-- head_top -->
            
            <div class="cent clearfix">
                <div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></div>
                
                
                
                <div class="info_head">
                    <div class="container-fluid">
                        <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="phone"><span>8(495) 532-77-88</span> <a href="#popup" class="popup-open">Не смогли дозвониться?</a></div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="work"><span>Работаем</span> ежедневно с 10:00 до 20:00</div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="cart">
                    <p class="titl"><a href="#">Ваша корзина:</a></p>
                    <p class="amount">5</p>
                    <p class="price">340.000 <span class="rub">b</span></p>
                    <p><a href="#" class="btn middle">Оформить заказ</a></p>
                </div>
            </div>
            
        </header>