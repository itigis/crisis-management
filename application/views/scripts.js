
/* google maps -----------------------------------------------------*/
(function initialize(){
  var mymap = L.map('map-canvas').setView([27, 30], 6);
  L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoibS1taXJhIiwiYSI6ImNqMTZwOG5qeDAycXQycXFzZmNyczlsNzMifQ.ghxfG81qxR3ygxL8TrkL0w', {
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
      maxZoom: 15,
      id: 'your.mapbox.project.id',
      accessToken: 'your.mapbox.public.access.token'
  }).addTo(mymap);
  var marker = L.marker([31, 30]).addTo(mymap);
  var polygon = L.polygon([
      [27.5, 30.5],
      [27.25, 30.25],
      [27.0, 30.0]
  ]).addTo(mymap);
})()
/* end google maps -----------------------------------------------------*/
