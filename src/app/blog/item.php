<?php
if (array_key_exists($itempath, $items['blog'])) {
    $item = $items['blog'][$itempath];
}
else{
    $item = $items['blog']['example'];
}
?>
<div class="container">
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <?php include('template/widgets/blog_container.tpl') ?>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="prev-next-post clearfix">
                            <span class="whiteBtn">
                                <a href="" class="prev"><i class="fa fa-angle-left"></i>Older Post</a>
                            </span>
                        <span class="whiteBtn">
                                <a href="" class="next">Newer Post<i class="fa fa-angle-right"></i></a>
                            </span>
                    </div>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <?php include('template/widgets/blog_author.tpl') ?>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <?php include('template/widgets/blog_comments.tpl') ?>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <?php include('template/widgets/comment_form.tpl') ?>
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