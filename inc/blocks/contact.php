<?php
$location = get_field('map_location');
$mainHeading = get_field("main_heading");
$mainParagrph = get_field("main_paragraph");
$locationHeading = get_field("location_heading");
$address = get_field("address");
$phoneNumber = get_theme_mod("contact_telephone");
$email = get_theme_mod("contact_email");
$facebook = get_theme_mod("facebook");
$twitter = get_theme_mod("twitter");
$pinterest = get_theme_mod("pinterest");
$youtube = get_theme_mod("youtube");
$monday = get_theme_mod('monday');
$tuesday = get_theme_mod('tuesday');
$wednesday = get_theme_mod('wednesday');
$thursday = get_theme_mod('thursday');
$friday = get_theme_mod('friday');
$saturday = get_theme_mod('saturday');
$sunday = get_theme_mod('sunday');
$form = get_field("contact_form");

if ($form != null) {
    $formShortcode = '[contact-form-7 id="' . $form->ID . '"]';
}
?>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="contact__infomation mt-4">
                    <?php if ($mainHeading != null) { ?>
                        <h2><?php echo $mainHeading; ?></h2>
                    <?php } ?>

                    <?php if ($mainParagrph != null) { ?>
                        <p class="mt-4"><?php echo $mainParagrph; ?></p>
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="contact__infomation mt-4 pr-3">
                        <?php if ($locationHeading != null) { ?>
                            <h2 class="contact__small__heading"><?php echo $locationHeading; ?> </h2>
                        <?php } ?>

                        <div class="line"></div>

                        <?php if ($address != null) { ?>
                            <p class="mt-4 w-75"><?php echo $address; ?></p>
                        <?php } ?>
                    </div>

                    <div class="contact__infomation mt-4"">
                        <h2 class=" contact__small__heading">Infomation</h2>
                        <div class="line mb-4"></div>
                        <?php if ($phoneNumber != null) { ?>
                            <p><?php echo $phoneNumber; ?></p>
                        <?php } ?>

                        <?php if ($email != null) { ?>
                            <p><?php echo $email; ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div class="contact__infomation">
                        <h2 class="contact__small__heading">Opening Hours</h2>
                        <div class="line"></div>
                        <ul class="footer__list mt-4">
                            <?php if ($monday != null) { ?>
                                <li class="mb-1">Mon: <?php echo $monday; ?></li>
                            <?php } ?>

                            <?php if ($tuesday != null) { ?>
                                <li class="mb-1">Tues: <?php echo $tuesday; ?></li>
                            <?php } ?>

                            <?php if ($wednesday != null) { ?>
                                <li class="mb-1">Wed: <?php echo $wednesday; ?></li>
                            <?php } ?>

                            <?php if ($thursday != null) { ?>
                                <li class="mb-1">Thurs: <?php echo $thursday; ?></li>
                            <?php } ?>

                            <?php if ($friday != null) { ?>
                                <li class="mb-1">Fri: <?php echo $friday; ?></li>
                            <?php } ?>

                            <?php if ($saturday != null) { ?>
                                <li class="mb-1">Sat: <?php echo $saturday; ?></li>
                            <?php } ?>

                            <?php if ($sunday != null) { ?>
                                <li class="mb-1">Sun: <?php echo $sunday; ?></li>
                            <?php } ?>
                        </ul>
                    </div>

                    <div class="contact__infomation contact__social">
                        <h2 class="contact__small__heading">Follow Us On</h2>
                        <div class="line"></div>
                        <div class="footer__socials mt-4">
                            <?php if ($facebook != null) { ?>
                                <a title="facebook link" href="<?php echo $facebook; ?>"><i class="fa-brands fa-facebook-f"></i></a>
                            <?php } ?>

                            <?php if ($twitter != null) { ?>
                                <a title="twitter link" href="<?php echo $twitter; ?>"><i class="fa-brands fa-twitter"></i></a>
                            <?php } ?>

                            <?php if ($pinterest != null) { ?>
                                <a title="pintrest link" href="<?php echo $pinterest; ?>"><i class="fa-brands fa-pinterest-p"></i></a>
                            <?php } ?>

                            <?php if ($youtube != null) { ?>
                                <a title="youtube link" href="<?php echo $youtube; ?>"><i class="fa-brands fa-youtube"></i></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="mt-5">
                    <h2 class="contact__email__heading">Get in touch</h2>
                    <?php if ($formShortcode != null) {
                        echo do_shortcode($formShortcode);
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--ACF MAP -->

<?php
if ($location) : ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>


<script type="text/javascript">
    (function($) {

        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap($el) {

            // Find marker elements within map.
            var $markers = $el.find('.marker');

            // Create gerenic map.
            var mapArgs = {
                zoom: $el.data('zoom') || 200,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapId: '2861c6ec8cac716d', //Map style from google console
                scrollwheel: false


            };
            var map = new google.maps.Map($el[0], mapArgs);

            // Add markers.

            map.markers = [];
            $markers.each(function() {
                initMarker($(this), map);
            });

            // Center map based on markers.
            centerMap(map);

            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker($marker, map) {

            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var latLng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng)
            };


            google.maps.event.trigger(map, 'resize');

            // // Create marker instance.
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                title: 'ULTIMATE GYM CENTRE',
                icon: 'http://gym.local/wp-content/uploads/2023/05/map-marker.png'
            });



            // Append to reference for later use.
            map.markers.push(marker);

            // If marker contains HTML, add it to an infoWindow.
            if ($marker.html()) {

                // Create info window.
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                // Show info window when marker is clicked.
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap(map) {

            // Create map boundaries from all map markers.
            var bounds = new google.maps.LatLngBounds();
            map.markers.forEach(function(marker) {
                bounds.extend({
                    lat: marker.position.lat(),
                    lng: marker.position.lng()
                });
            });

            // Case: Single marker.
            if (map.markers.length == 1) {
                map.setCenter(bounds.getCenter());

                // Case: Multiple markers.
            } else {
                map.fitBounds(bounds);
            }
        }

        // Render maps on page load.
        $(document).ready(function() {
            $('.acf-map').each(function() {
                var map = initMap($(this));
            });
        });

    })(jQuery);
</script>