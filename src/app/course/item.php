<?php
if (array_key_exists($itempath, $items['blog'])) {
    $item = $items['course'][$itempath];
}
else{
    $item = $items['course']['example'];
}
?>
<div class="container">
    <div class="row">
        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="course-post">
                        <div class="course-image">
                            <img src="http://placehold.it/750x220" alt="">
                        </div> <!-- /.course-image -->
                        <div class="course-details clearfix">
                            <h3 class="course-post-title"><?=$item['title']?></h3>
                            <?=$item['body']?>
                            <a href="<?php echo $menu['pages']['contact.php']['link']; ?>" class="mainBtn pull-right">Apply to this course</a>
                        </div> <!-- /.course-details -->
                    </div> <!-- /.course-post -->

                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->


            <div class="row">
                <div class="col-md-12">
                    <?php include('template/widgets/disqus_thread.tpl') ?>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

        </div> <!-- /.col-md-8 -->


        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php include('template/widgets/top_professors.tpl') ?>
            <?php include('template/widgets/our_gallery.tpl') ?>
        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
</div> <!-- /.container -->