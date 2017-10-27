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

    <!-- CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../../font/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="../../template/scss/animate.scss" rel="stylesheet" media="screen">

    <link href="../../template/scss/style.scss" rel="stylesheet" media="screen">

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../font/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../font/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../font/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../../font/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../../font/ico/favicon.ico">

    <!-- JavaScripts -->
    <script src="../../vendor/jquery-1.10.2.min.js"></script>
    <script src="../../vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="../../vendor/modernizr.js"></script>
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
            <li><a href="../pages/index.php">Home</a></li>
            <li><a href="#">Events</a>
                <ul>
                    <li><a href="../event/index.php">Events List</a></li>
                    <li><a href="../event/item.php">Event Details</a></li>
                </ul>
            </li>
            <li><a href="#">Courses</a>
                <ul>
                    <li><a href="../course/index.php">Course List</a></li>
                    <li><a href="../course/item.php">Course Single</a></li>
                </ul>
            </li>
            <li><a href="#">Blog Entries</a>
                <ul>
                    <li><a href="../blog/index.php">Blog Grid</a></li>
                    <li><a href="../blog/item.php">Blog Single</a></li>
                </ul>
            </li>
            <li><a href="">Pages</a>
                <ul>
                    <li><a href="../pages/archives.php">Archives</a></li>
                    <li><a href="../pages/gallery.php">Our Gallery</a></li>
                </ul>
            </li>
            <li><a href="../pages/contact.php">Contact</a></li>
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
                <p><i class="fa fa-phone"></i> +01 2334 853</p>
                <p><i class="fa fa-envelope"></i> <a href="mailto:email@universe.com">email@universe.com</a></p>
            </div> <!-- /.header-left -->

            <div class="col-md-4">
                <div class="logo">
                    <a href="../pages/index.php" title="Universe" rel="home">
                        <img src="../../template/img/logo.png" alt="Universe">
                    </a>
                </div> <!-- /.logo -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-4 header-right">
                <ul class="small-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Apply Now</a></li>
                </ul>
                <div class="search-form">
                    <form name="search_form" method="get" action="#" class="search_form">
                        <input type="text" name="s" placeholder="Search the site..." title="Search the site..." class="field_search">
                    </form>
                </div>
            </div> <!-- /.header-right -->
        </div>
    </div> <!-- /.container -->

    <div class="nav-bar-main" role="navigation">
        <div class="container">
            <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
                <ul class="main-menu sf-menu">
                    <li class="active"><a href="../pages/index.php">Home</a></li>
                    <li><a href="#">Events</a>
                        <ul class="sub-menu">
                            <li><a href="../event/index.php">Events List</a></li>
                            <li><a href="../event/item.php">Events Details</a>
                        </ul>
                    </li>
                    <li><a href="../course/index.php">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="../course/item.php">Course Single</a></li>
                        </ul>
                    </li>
                    <li><a href="../blog/index.php">Blog Entries</a>
                        <ul class="sub-menu">
                            <li><a href="../blog/item.php">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="../pages/archives.php">Archives</a></li>
                            <li><a href="../pages/gallery.php">Our Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="../pages/contact.php">Contact</a></li>
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


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="main-slideshow">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="http://placehold.it/770x400" alt="Slide 1"/>
                            <div class="slider-caption">
                                <h2><a href="../blog/item.php">When a Doctor’s Visit Is a Guilt Trip</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                        </li>
                        <li>
                            <img src="http://placehold.it/770x400" alt="Slide 1"/>
                            <div class="slider-caption">
                                <h2><a href="../blog/item.php">Unlocking the scrolls of Herculaneum</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                        </li>
                        <li>
                            <img src="http://placehold.it/770x400" alt="Slide 1"/>
                            <div class="slider-caption">
                                <h2><a href="../blog/item.php">Corin Sworn wins Max Mara Art Prize</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                            </div>
                        </li>
                    </ul> <!-- /.slides -->
                </div> <!-- /.flexslider -->
            </div> <!-- /.main-slideshow -->
        </div> <!-- /.col-md-12 -->

        <div class="col-md-4">
            <div class="widget-item">
                <div class="request-information">
                    <h4 class="widget-title">Request Information</h4>
                    <form class="request-info clearfix">
                        <div class="full-row">
                            <label for="cat">Campus of Interest:</label>
                            <div class="input-select">
                                <select name="cat" id="cat" class="postform">
                                    <option value="-1">-- select --</option>
                                    <optgroup label="Picnic">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </optgroup>
                                    <optgroup label="Camping">
                                        <option>Tent</option>
                                        <option>Flashlight</option>
                                        <option>Toilet Paper</option>
                                    </optgroup>
                                </select>
                            </div> <!-- /.input-select -->
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <label for="cat2">Program of Interest:</label>
                            <div class="input-select">
                                <select name="cat2" id="cat2" class="postform">
                                    <option value="-1">-- select --</option>
                                    <option class="level-0" value="49">Germany</option>
                                    <option class="level-0" value="56">United Kingdom</option>
                                    <option class="level-0" value="59">Italy</option>
                                    <option class="level-0" value="76">France</option>
                                    <option class="level-0" value="77">Belgium</option>
                                    <option class="level-0" value="79">Monaco</option>
                                </select>
                            </div> <!-- /.input-select -->
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <label for="yourname">Full Name:</label>
                            <input type="text" id="yourname" name="yourname">
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <label for="email-id">Email Address:</label>
                            <input type="text" id="email-id" name="email-id">
                        </div> <!-- /.full-row -->

                        <div class="full-row">
                            <div class="submit_field">
                                <span class="small-text pull-left">Subscribe to our newsletter</span>
                                <input class="mainBtn pull-right" type="submit" name="" value="Submit Request">
                            </div> <!-- /.submit-field -->
                        </div> <!-- /.full-row -->


                    </form> <!-- /.request-info -->
                </div> <!-- /.request-information -->
            </div> <!-- /.widget-item -->
        </div> <!-- /.col-md-4 -->
    </div>
</div>


<div class="container">
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="widget-item">
                        <h2 class="welcome-text">Welcome to Universe Premium Template</h2>
                        <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, adipisci, quibusdam, ad ab quisquam esse aspernatur exercitationem aliquam at fugit omnis vitae recusandae eveniet.</strong><br><br>Inventore, aliquam sequi nisi velit magnam accusamus reprehenderit nemo necessitatibus doloribus molestiae fugit repellat repudiandae dolor. Incidunt, nulla quidem illo suscipit nihil!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, dolorem, fugiat, commodi totam accusantium illo incidunt quis eius eum iure et fugit voluptas atque ratione nobis sed omnis quod ipsa.<br><br>Vivamus mattis nibh vitae dui egestas posuere. Maecenas a est at enim blandit interdum. Cras eget ipsum ac nunc tristique tincidunt sit amet nec quam. Vivamus sed suscipit enim, et dignissim tellus.</p>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">

                <!-- Show Latest Blog News -->
                <div class="col-md-6">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Latest News</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            <div class="blog-list-post clearfix">
                                <div class="blog-list-thumb">
                                    <a href="../blog/item.php"><img src="http://placehold.it/65x65" alt=""></a>
                                </div>
                                <div class="blog-list-details">
                                    <h5 class="blog-list-title"><a href="../blog/item.php">Graduate Open Day at the Ruskin</a></h5>
                                    <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                </div>
                            </div> <!-- /.blog-list-post -->
                            <div class="blog-list-post clearfix">
                                <div class="blog-list-thumb">
                                    <a href="../blog/item.php"><img src="http://placehold.it/65x65" alt=""></a>
                                </div>
                                <div class="blog-list-details">
                                    <h5 class="blog-list-title"><a href="../blog/item.php">Visiting Artists: Giles Bailey</a></h5>
                                    <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                </div>
                            </div> <!-- /.blog-list-post -->
                            <div class="blog-list-post clearfix">
                                <div class="blog-list-thumb">
                                    <a href="../blog/item.php"><img src="http://placehold.it/65x65" alt=""></a>
                                </div>
                                <div class="blog-list-details">
                                    <h5 class="blog-list-title"><a href="../blog/item.php">Workshop: Theories of the Image</a></h5>
                                    <p class="blog-list-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
                                </div>
                            </div> <!-- /.blog-list-post -->
                        </div> <!-- /.widget-inner -->
                    </div> <!-- /.widget-main -->
                </div> <!-- /col-md-6 -->

                <!-- Show Latest Events List -->
                <div class="col-md-6">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Events</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            <div class="event-small-list clearfix">
                                <div class="calendar-small">
                                    <span class="s-month">Jan</span>
                                    <span class="s-date">24</span>
                                </div>
                                <div class="event-small-details">
                                    <h5 class="event-small-title"><a href="../event/item.php">Nelson Mandela Memorial Tribute</a></h5>
                                    <p class="event-small-meta small-text">Cramton Auditorium 9:00 AM to 1:00 PM</p>
                                </div>
                            </div>
                            <div class="event-small-list clearfix">
                                <div class="calendar-small">
                                    <span class="s-month">Jan</span>
                                    <span class="s-date">24</span>
                                </div>
                                <div class="event-small-details">
                                    <h5 class="event-small-title"><a href="../event/item.php">OVADA Oxford Open</a></h5>
                                    <p class="event-small-meta small-text">Posner Center 4:30 PM to 6:00 PM</p>
                                </div>
                            </div>
                            <div class="event-small-list clearfix">
                                <div class="calendar-small">
                                    <span class="s-month">Jan</span>
                                    <span class="s-date">24</span>
                                </div>
                                <div class="event-small-details">
                                    <h5 class="event-small-title"><a href="../event/item.php">Filming Objects And Sculpture</a></h5>
                                    <p class="event-small-meta small-text">A70 Cyert Hall 12:00 PM to 1:00 PM</p>
                                </div>
                            </div>
                        </div> <!-- /.widget-inner -->
                    </div> <!-- /.widget-main -->
                </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="widget-main">
                        <div class="widget-main-title">
                            <h4 class="widget-title">Our Campus</h4>
                        </div> <!-- /.widget-main-title -->
                        <div class="widget-inner">
                            <div class="our-campus clearfix">
                                <ul>
                                    <li><img src="../../images/campus-logo1.jpg" alt=""></li>
                                    <li><img src="../../images/campus-logo2.jpg" alt=""></li>
                                    <li><img src="../../images/campus-logo3.jpg" alt=""></li>
                                    <li><img src="../../images/campus-logo4.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- /.widget-main -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">

            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Top Professors</h4>
                </div>
                <div class="widget-inner">
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="http://placehold.it/75x75" alt="Profesor Name">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                            <p class="small-text">Sed ut lectus ac lacus molestie posuere non tincidunt arcu.</p>
                        </div> <!-- /.prof-details -->
                    </div> <!-- /.prof-list-item -->
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="http://placehold.it/75x75" alt="Profesor Name">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                            <p class="small-text">Nullam sollicitudin libero ut ullamcorper pretium.</p>
                        </div> <!-- /.prof-details -->
                    </div> <!-- /.prof-list-item -->
                    <div class="prof-list-item clearfix">
                        <div class="prof-thumb">
                            <img src="http://placehold.it/75x75" alt="Profesor Name">
                        </div> <!-- /.prof-thumb -->
                        <div class="prof-details">
                            <h5 class="prof-name-list">Prof. Shawn D. Salazar</h5>
                            <p class="small-text">Integer et nisl tincidunt, euismod orci eget, posuere nunc.</p>
                        </div> <!-- /.prof-details -->
                    </div> <!-- /.prof-list-item -->
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->

            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Testimonial</h4>
                </div>
                <div class="widget-inner">
                    <div id="slider-testimonials">
                        <ul>
                            <li>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                            </li>
                            <li>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, quos, veniam optio voluptas hic delectus soluta odit nemo harum <strong class="dark-text">Shannon D. Edwards</strong></p>
                            </li>
                        </ul>
                        <a class="prev fa fa-angle-left" href=""></a>
                        <a class="next fa fa-angle-right" href=""></a>
                    </div>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->

            <div class="widget-main">
                <div class="widget-main-title">
                    <h4 class="widget-title">Our Gallery</h4>
                </div>
                <div class="widget-inner">
                    <div class="gallery-small-thumbs clearfix">
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg" title="Gallery Tittle One">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg" title="Gallery Tittle Two">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                        <div class="thumb-small-gallery">
                            <a class="fancybox" data-fancybox-group="gallery1" href="../../template/img/slide1.jpg">
                                <img src="http://placehold.it/70x70" alt="" />
                            </a>
                        </div>
                    </div> <!-- /.galler-small-thumbs -->
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->

        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Contact Us</h4>
                    <p>The simple contact form below comes packed within this theme. <br><br>Mailing address:<br>877 Filbert Street<br> Chester, PA 19013</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Favourites</h4>
                    <ul class="list-links">
                        <li><a href="#">A to Z Index</a></li>
                        <li><a href="#">Admissions</a></li>
                        <li><a href="#">Bookstore</a></li>
                        <li><a href="#">Catalog / Classes</a></li>
                        <li><a href="#">Dining</a></li>
                        <li><a href="#">Financial Aid</a></li>
                        <li><a href="#">Graduation</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Resources For</h4>
                    <ul class="list-links">
                        <li><a href="#">Future Students</a></li>
                        <li><a href="#">Current Students</a></li>
                        <li><a href="#">Faculty/Staff</a></li>
                        <li><a href="#">International</a></li>
                        <li><a href="#">Postdocs</a></li>
                        <li><a href="#">Alumni</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-widget">
                    <h4 class="footer-widget-title">Study</h4>
                    <ul class="list-links">
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Apply Now</a></li>
                        <li><a href="#">Scholarships</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">International student enquiries</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <ul class="footer-media-icons">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                        <li><a href="#" class="fa fa-youtube"></a></li>
                        <li><a href="#" class="fa fa-linkedin"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                        <li><a href="#" class="fa fa-apple"></a></li>
                        <li><a href="#" class="fa fa-rss"></a></li>
                    </ul>
                </div>
            </div>
        </div> <!-- /.row -->

        <div class="bottom-footer">
            <div class="row">
                <div class="col-md-5">
                    <p class="small-text">&copy; Copyright 2014. Universe designed by <a href="#">Esmeth</a></p>
                </div> <!-- /.col-md-5 -->
                <div class="col-md-7">
                    <ul class="footer-nav">
                        <li><a href="../pages/index.php">Home</a></li>
                        <li><a href="../course/index.php">Courses</a></li>
                        <li><a href="../event/index.php">Events</a></li>
                        <li><a href="../blog/index.php">Blog</a></li>
                        <li><a href="../pages/contact.php">Contact</a></li>
                    </ul>
                </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->
        </div> <!-- /.bottom-footer -->

    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->


<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../../vendor/plugins.js"></script>
<script src="../../template/js/custom.js"></script>

</body>
</html>