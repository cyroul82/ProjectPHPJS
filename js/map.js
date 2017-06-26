var map;

var position = {
  lat: 43.727908,
  lng: 7.285106
};

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: position,
    zoom: 15
  });



  var marker = new google.maps.Marker({
    position: position,
    map: map,
    title: 'Afpa Nice:!'
  });
}
