<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php include('template/widgets/main_slideshow.tpl') ?>
        </div>
        <div class="col-md-4">
            <?php include('template/widgets/request_information.tpl'); ?>
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
                        <h2 class="welcome-text">Доборо пожаловать во 2 лабу по вебке</h2>
                        <p><strong> Если ты это читаешь, то ты решил сделать 2 лабу по вебке.<br>
                                Что тут делать:
                                <br><br>
                                С самого начала нужно пульнуть master ветку к себе. Настраиваете SSL ключ (google в помощь)
                                <br><br>
                                Нужно спулить ветку master к себе.<br>
                                * git clone git@github.com:nikon72ru/lab2group144.git
                                <br><br>
                                Затем создаем свою ветку<br>
                                * git branch BRANCH_NAME
                                <br><br>
                                Делаем задания в этой папке
                                <br><br>
                                * git add . //Добавляешь файл/коммитим (в commit message можешь написать, какой ты классный)<br>
                                * git push -u origin *BRANCH NAME* //Заливаем свой коммит в ветку, BRANCH NAME, соответсвенно, надо заменить на название свой ветки (не пуште в мастер)<br>
                                * Убеждаемся, что все хорошо, и делаем PR (pull request) в мастер, пишем мне
                                <br><br>
                                Готово! Вы велеколепны !!!!</p>
                    </div> <!-- /.widget-item -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->

            <div class="row">
                <!-- Show Latest Blog News -->
                <div class="col-md-6">
                    <?php include('template/widgets/latest_news.tpl') ?>
                </div>
                <!-- Show Latest Events List -->
                <div class="col-md-6">
                    <?php include('template/widgets/events.tpl') ?>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <?php include('template/widgets/our_campus.tpl') ?>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php include('template/widgets/top_professors.tpl') ?>
            <?php include('template/widgets/testimonial.tpl') ?>
            <?php include('template/widgets/our_gallery.tpl') ?>
        </div>
    </div>
</div>