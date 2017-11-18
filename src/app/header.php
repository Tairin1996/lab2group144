<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <title><?php echo $menu[$module][$action]['title']; ?> - <?php echo $website;?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="College Education Responsive Template">
    <meta name="author" content="Esmet">
    <meta charset="UTF-8">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Bootstrap & Custom -->
    <link href="../template/scss/style.css" rel="stylesheet" media="screen">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../font/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../font/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../font/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../font/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../font/ico/favicon.ico">

    <!-- JavaScripts -->
    <script src="../vendor/jquery-1.10.2.min.js"></script>
    <script src="../vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="../vendor/modernizr.js"></script>
    <!--[if lt IE 8]>
    <div style='clear:both; text-align:center; position:relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
    </div>
    <![endif]-->
</head>
<body>
<!-- This one in here is responsive menu for tablet and mobiles -->
<div class="responsive-navigation visible-sm visible-xs">
    <a href="#" class="menu-toggle-btn">
        <i class="fa fa-bars"></i>
    </a>
    <div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="<?php echo $menu['pages']['index.php']['link']; ?>">Главная</a></li>
            <li><a href="#">События</a>
                <ul>
                    <li><a href="<?php echo $menu['event']['grid.php']['link']; ?>">Сетка событий</a></li>
                    <li><a href="<?php echo $menu['event']['index.php']['link']; ?>">Список событий</a></li>
                </ul>
            </li>
            <li><a href="#">Courses</a>
                <ul>
                    <li><a href="<?php echo $menu['course']['index.php']['link']; ?>">Курсы</a></li>
                </ul>
            </li>
            <li><a href="#">Blog Entries</a>
                <ul>
                    <li><a href="<?php echo $menu['blog']['index.php']['link']; ?>">Блог</a></li>
                </ul>
            </li>
            <li><a href="">Страницы</a>
                <ul>
                    <li><a href="<?php echo $menu['pages']['archive.php']['link']; ?>">Архив</a></li>
                    <li><a href="<?php echo $menu['pages']['gallery.php']['link']; ?>">Галерея</a></li>
                </ul>
            </li>
            <li><a href="<?php echo $menu['pages']['contact.php']['link']; ?>">Контакты</a></li>
        </ul> <!-- /.main_menu -->
        <ul class="social_icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
        </ul> <!-- /.social_icons -->
    </div> <!-- /.responsive_menu -->
</div> <!-- /responsive_navigation -->

<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-left">
                <p><i class="fa fa-phone"></i> +7 982 920 60 35</p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:a.s.bezrukov@utmn.ru">a.s.bezrukov@utmn.ru</a></p>
            </div> <!-- /.header-left -->

            <div class="col-md-4">
                <div class="logo">
                    <a href="<?php echo $menu['pages']['index.php']['link']; ?>" title="Universe" rel="home">
                        <img src="../template/img/logo.png" alt="Universe">
                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 header-right">
                <ul class="small-links">
                    <li><a href="#">О сайте</a></li>
                    <li><a href="#">Контакты</a></li>
                    <li><a href="#">Подписка</a></li>
                </ul>
                <div class="search-form">
                    <form name="search_form" method="get" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Поиск по сайту..." title="Поиск по сайту..." class="field_search">
                    </form>
                </div>
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->

    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu">
                    <li class="<?php echo ($menu['pages']['index.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                        <a href="<?php echo $menu['pages']['index.php']['link']; ?>">Главная</a></li>
                    <li><a href="#">События</a>
                        <ul class="sub-menu">
                            <li class="<?php echo ($menu['event']['grid.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                                <a href="<?php echo $menu['event']['grid.php']['link']; ?>">Сетка событий</a></li>
                            <li class="<?php echo ($menu['event']['index.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                                <a href="<?php echo $menu['event']['index.php']['link']; ?>">Список событий</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo ($menu['course']['index.php']['link']== $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                        <a href="<?php echo $menu['course']['index.php']['link']; ?>">Курсы</a>

                    </li>
                    <li class="<?php echo ($menu['blog']['index.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                        <a href="<?php echo $menu['blog']['index.php']['link']; ?>">Блог</a>
                    </li>
                    <li><a href="#">Страницы</a>
                        <ul class="sub-menu">
                            <li class="<?php echo ($menu['pages']['archives.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                                <a href="<?php echo $menu['pages']['archives.php']['link']; ?>">Архив</a></li>
                            <li class="<?php echo ($menu['pages']['gallery.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                                <a href="<?php echo $menu['pages']['gallery.php']['link']; ?>">Галерея</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo ($menu['pages']['contact.php']['link'] == $menu[$module][$action]['link'] ? 'active' : '' ); ?>">
                        <a href="<?php echo $menu['pages']['contact.php']['link']; ?>">Контакты</a></li>
                </ul> <!-- /.main-menu -->

                <ul class="social-icons pull-right">
                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                </ul> <!-- /.social-icons -->
            </nav> <!-- /.main-navigation -->
        </div> <!-- /.container -->
    </div> <!-- /.nav-bar-main -->

</header> <!-- /.site-header -->