<div class="container">
    <div class="page-title clearfix">
        <div class="row">
            <div class="col-md-12">
                <?php if ($module=='pages' && $action=='index.php'){ ?>
                    <h6><span class="page-active"><?= $menu['pages']['index.php']['title'] ?></span></h6>
                <?php }else {?>
                    <h6><a href="<?=$menu['pages']['index.php']['link']?>"><?= $menu['pages']['index.php']['title'] ?></a></h6>
                <?php } ?>

                <?php
                //pages пропускаем, т.к. мы его всегда обрабатываем сверху, как главную стр.
                if ($module != 'pages'){
                    if ($action == 'index.php'){ ?>
                        <h6><span class="page-active"><?=$menu[$module]['index.php']['title']?></span></h6>
                    <?php } else{ ?>
                        <h6><a href="<?=$menu[$module]['index.php']['link']?>"><?= $menu[$module]['index.php']['title'] ?></a></h6>
                    <?php }
                } ?>

                <?php
                //TODO сделать так, чтоб бралось название статьи, а не просто "Запись блога", но пока будет так
                if ($action != 'index.php'){ ?>
                    <h6><span class="page-active"><?=$menu[$module][$action]['title']?></span></h6>
                <?php } ?>
            </div>
        </div>
    </div>
</div>