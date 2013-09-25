<?php // Template Name: Karta ?>

<?php get_header(); ?>
<div style="clear: both"></div>
<div id="mapdiv"></div>

<!-- The Map -->
<script src="http://cdn.leafletjs.com/leaflet-0.6.4/leaflet.js"></script>
<script>
    jQuery(document).ready(function() {
        var lat = 45.793863;
        var lon = 15.969757;
        var zoom = 17;

        var map = L.map('mapdiv', {
            center: [lat, lon],
            zoom: zoom,
            scrollWheelZoom: false
        })

        // Use Open Street Map
        var url = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
        var attrib = 'Map data © OpenStreetMap contributors';

        L.tileLayer(url, {
            maxZoom: 18,
            attribution: attrib
        }).addTo(map);

        L.marker([lat, lon])
          .addTo(map)
          .bindPopup("<strong>Hypo centar</strong><br />Slavonska avenija 6")
          .openPopup();
    });
</script>

<?php get_footer(); ?>
