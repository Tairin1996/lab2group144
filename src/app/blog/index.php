<div class="container">
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a href="#" class="cat-blog">Business</a>
                            <a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                <img src="http://placehold.it/360x220" alt="">
                            </a>
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link'].'&item=example'; ?>">
                                    Студенты ТюмГУ проверяют свои знания на стажировке в Huawei
                                </a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">22 Ноября 2017</a></span> <span><a href="#">127 просмотров</a></span></p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-6">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a href="#" class="cat-blog">Tech & Engineering</a>
                            <a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                <img src="http://placehold.it/360x220" alt="">
                            </a>
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                    Насыщенный день Блокчейн ТюмГУ
                                </a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">21 Ноября 2017</a></span> <span><a href="#">50 просмотров</a></span></p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-6">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a href="#" class="cat-blog">Government</a>
                            <a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                <img src="http://placehold.it/360x220" alt="">
                            </a>
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                    Онлайн-соревнования по информационной безопасности "FarEasnCTF-2017"
                                </a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">20 Ноября 2017</a></span> <span><a href="#">46 просмотров</a></span></p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-6">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a href="#" class="cat-blog">Family</a>
                            <a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                <img src="http://placehold.it/360x220" alt="">
                            </a>
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                    Состоялся муниципальный этап Всероссийской олимпиады школьников по математике
                                </a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">20 Ноября 2017</a></span> <span><a href="#">127 просмотров</a></span></p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-6">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a href="#" class="cat-blog">Science</a>
                            <a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                <img src="http://placehold.it/360x220" alt="">
                            </a>
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                    Блестящая возможность Анны Жихаревой
                                </a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">17 Ноября 2017</a></span><span><a href="#">41 просмотр</a></span></p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div> <!-- /.col-md-6 -->

                <div class="col-md-6 col-sm-6">
                    <div class="blog-grid-item">
                        <div class="blog-grid-thumb">
                            <a href="#" class="cat-blog">Student Achievements</a>
                            <a href="<?php echo $menu['blog']['item.php']['link']; ?>">
                                <img src="http://placehold.it/360x220" alt="">
                            </a>
                        </div>
                        <div class="box-content-inner">
                            <h4 class="blog-grid-title"><a href="<?php echo $items['blog']['huawey']; ?>">
                                    Осенняя сессия в компании Huawei
                                </a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">16 Ноября 2017</a></span><span><a href="#">83 просмотра</a></span></p>
                        </div> <!-- /.box-content-inner -->
                    </div> <!-- /.blog-grid-item -->
                </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="load-more-btn">
                        <a href="#">Click here to load more events</a>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php include('template/widgets/search_form_widget.tpl') ?>
            <?php include('template/widgets/categories.tpl') ?>
            <?php include('template/widgets/our_gallery.tpl') ?>
            <?php include('template/widgets/testimonial.tpl') ?>
        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
</div> <!-- /.container -->
