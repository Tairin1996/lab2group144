<?php
if (array_key_exists($itempath, $items['event'])) {
    $item = $items['event'][$itempath];
}
else{
    $item = $items['event']['example'];
}
?>
<div class="container">
    <div class="row">

        <!-- Here begin Main Content -->
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="event-container clearfix">
                        <div class="left-event-content">
                            <img src="http://placehold.it/225x240" alt="">
                            <div class="event-contact">
                                <h4>Контактные данные:</h4>
                                <ul>
                                    <?=$item['contact']?>
                                </ul>
                            </div>
                        </div> <!-- /.left-event-content -->
                        <div class="right-event-content">
                            <h2 class="event-title"><?=$item['title']?></h2>
                            <?=$item['body']?>
                            <div class="google-map-canvas" id="map-canvas" style="height: 210px;">
                            </div>
                        </div> <!-- /.right-event-content -->
                    </div> <!-- /.event-container -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.col-md-8 -->

        <!-- Here begin Sidebar -->
        <div class="col-md-4">
            <?php include('template/widgets/upcoming_events.tpl') ?>
            <?php include('template/widgets/photo_from_events.tpl') ?>
        </div> <!-- /.col-md-4 -->

    </div> <!-- /.row -->
</div> <!-- /.container -->

<script>
    function initialize() {
        var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(42.888543, 20.879661)
        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
    }

    function loadScript() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
            'callback=initialize';
        document.body.appendChild(script);
    }

    window.onload = loadScript;
</script>