
/* google maps -----------------------------------------------------*/
function initialize() {

  /* position Amsterdam */
  var latlng = new google.maps.LatLng(30, 31);

  var mapOptions = {
    center: latlng,
    scrollWheel: false,
    zoom: 5
  };
  
  var marker = new google.maps.Marker({
    position: latlng,
    url: '/',
    animation: google.maps.Animation.DROP
  });
  
  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
  marker.setMap(map);

};
/* end google maps -----------------------------------------------------*/
