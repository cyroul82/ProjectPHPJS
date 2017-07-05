<?php
function displayMap(){ // Display Google Map
?>
  
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <div id="map"></div>
        </div>
        <div class="col-md-2"></div>
    </div> <!-- End Google Map -->

    <script src="js/map.js" charset="utf-8"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCU0fHf2zsjxFQuWJ2It_HbNcpFnjHeMNo&callback=initMap"  type="text/javascript"></script></div>

<?php } ?>