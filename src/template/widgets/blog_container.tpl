<div class="blog-post-container">
    <div class="blog-post-image">
        <img src="http://placehold.it/750x390" alt="">
        <div class="blog-post-meta">
            <ul>
                <li><i class="fa fa-calendar-o"></i>24/01/2014</li>
                <li><a href="#blog-comments"><i class="fa fa-comments"></i>3 comments</a></li>
                <li><a href="#blog-author"><i class="fa fa-user"></i><?=$item['author_name']?></a></li>
            </ul>
        </div> <!-- /.blog-post-meta -->
    </div> <!-- /.blog-post-image -->
    <div class="blog-post-inner">
        <h3 class="blog-post-title"><?=$item['title']?></h3>
        <?=$item['body']?>
        <div class="tag-items">
            <span class="small-text">Tags:</span>
            <a href="#" rel="tag">business</a>
            <a href="#" rel="tag">html</a>
            <a href="#" rel="tag">education</a>
        </div>
    </div>
</div> <!-- /.blog-post-container -->