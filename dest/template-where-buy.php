<?php /* Template Name: Где купить */ get_header(); ?>

<div class="container">
    <h1><?php the_title() ?></h1>
</div>
<style>
    #map {
        height: 100vh;
    }
</style>
<?php $cityList = []; 
 if( have_rows('map') ):
    while ( have_rows('map') ) : the_row();
        $cords = [];
        $city = get_sub_field('map_location_name');
        if( have_rows('map_markers') ):
            while ( have_rows('map_markers') ) : the_row(); 
            $cord = (object)[];
            $cord->city = $city;
            $cord->latitude = get_sub_field('map_marker_shirota');
            $cord->longitude = get_sub_field('map_marker_dolgota');
            $cord->content = get_sub_field('map_marker_descriptions');
            array_push($cords, $cord);
            endwhile;
        endif; 
        array_push($cityList, $cords);
    endwhile;
endif; 

?>
<div class="container">
    <div class="city__container">
        <div class="city__current">Украина</div>
        <div class="city__list">
            <div class="city__pre-list">
                <div class="city" data-city="0">Украина</div>
                <?php
                foreach ($cityList as $value => $city) { 
                    $res = array_shift(array_values($city)); ?>
                    <div class="city" data-city="<?php echo $value + 1; ?>"><?php echo $res->city; ?></div>
                <?php } ?>
            </div>
        </div>
        <div class="city__choose">
            <div class="city__choose__list active">Список</div>
            <div class="city__choose__map">Карта</div>
        </div>
    </div>
</div>
<div class="container listMap">
    <div id="listMap">
            <div class="list__head">
                <div class="list__head__value">Город</div>
                <div class="list__head__value">Адрес</div>
                <div class="list__head__value">Специалист</div>
                <div class="list__head__value">Номер телефона</div>
            </div>
            <div class="list__body" data-list-city="1">
                <div class="list__head__value listCity">Харьков</div>
                <div class="list__head__value address">ул.Полярная, 20</div>
                <div class="list__head__value staff">Коваленко Дмитрий</div>
                <div class="list__head__value phone">+38 067 713 11 77</div>
            </div>
            <div class="list__body" data-list-city="1">
                <div class="list__head__value listCity">Харьков</div>
                <div class="list__head__value address">ул.Полярная, 20</div>
                <div class="list__head__value staff">Коваленко Дмитрий</div>
                <div class="list__head__value phone">+38 067 713 11 77</div>
            </div>
            <div class="list__body" data-list-city="2">
                <div class="list__head__value listCity">Киев</div>
                <div class="list__head__value address">ул.Полярная, 20</div>
                <div class="list__head__value staff">Коваленко Дмитрий</div>
                <div class="list__head__value phone">+38 067 713 11 77</div>
            </div>
            <div class="list__body" data-list-city="2">
                <div class="list__head__value listCity">Киев</div>
                <div class="list__head__value address">ул.Полярная, 20</div>
                <div class="list__head__value staff">Коваленко Дмитрий</div>
                <div class="list__head__value phone">+38 067 713 11 77</div>
            </div>
    </div>
</div>



<div id="map"></div>
    <script>
      var map;
      let features = [];

      function initMap(dataCity) {
        map = new google.maps.Map(
            document.getElementById('map'),
            {center: new google.maps.LatLng(49.7221492, 32.1822767), zoom: 7});

        var icon = '<?php the_field('map_icon_url'); ?>';
        features = [
            <?php
                if(!empty($cityList)):
                    foreach ($cityList as $arr) { ?>
                        [
                        <?php foreach ($arr as $city) { ?>
                        {
                        city: '<?php echo $city->city; ?>',
                        position: new google.maps.LatLng(<?php echo $city->latitude; ?>, <?php echo $city->longitude; ?>),
                        content: '<?php echo $city->content; ?>'
                        },
                    <?php } ?>
                        ],
                    <?php }
                endif;
            ?>        
        ];
        const dataCity0 = [];
        features.forEach((el) => el.forEach((res) => dataCity0.push(res)));
        if (dataCity && dataCity  > 0) {
            const cityArr = features[dataCity - 1];
            createMarkers(cityArr);
        } else {
            createMarkers(dataCity0);
        }
        
        // Create markers.

        function createMarkers(markerArray) {
            for (var i = 0; i < markerArray.length; i++) {
                let infowindow = new google.maps.InfoWindow({
                    content: markerArray[i].content
                });
                let marker = new google.maps.Marker({
                    position: markerArray[i].position,
                    icon: icon,
                    map: map
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            };
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUmudOZvUv5-K8__f8I7JyNT3nxG8Vq4Y&callback=initMap">
    </script>
<!-- footer-nav -->
<?php get_template_part( 'inc/blog', 'footer' ); ?>

<?php get_footer(); ?>