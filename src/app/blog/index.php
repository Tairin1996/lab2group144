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
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link'].'&item=example'; ?>">Example blog</a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
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
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">Unlocking the scrolls of Herculaneum</a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
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
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">Corin Sworn wins Max Mara Art Prize</a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
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
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">Graduate Open Day at the Ruskin</a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
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
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">Visiting Artists: Giles Bailey</a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
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
                            <h4 class="blog-grid-title"><a href="<?php echo $menu['blog']['item.php']['link']; ?>">Workshop: Theories of the Image</a></h4>
                            <p class="blog-grid-meta small-text"><span><a href="#">12 January 2014</a></span> with <span><a href="#">3 comments</a></span></p>
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
