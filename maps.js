/* function initialize() {
        var mapOptions = {
          center: { lat: 64.9312763, lng: -19.0211697},
          zoom: 7,
		  noClear: true,
		  scrollwheel: false,
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
			

      }
      google.maps.event.addDomListener(window, 'load', initialize); */
	  
var LocationData = [
    [64.164513, -22.021677, "Grotta&nbsp;beach" ], 
    [64.879774, -24.053811, "Hellissandur" ], 
    [65.648402, -24.078854, "Westfjords" ], 
    [66.376915, -14.545276, "Fontur" ], 
    [66.197320, -18.857185, "North&nbsp;beach" ]
];
 
function initialize()
{
    var map = 
        new google.maps.Map(document.getElementById('map-canvas'));
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();
     
    for (var i in LocationData)
    {
        var p = LocationData[i];
        var latlng = new google.maps.LatLng(p[0], p[1]);
        bounds.extend(latlng);
         
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: p[2]
        });
     
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
        });
    }
     
    map.fitBounds(bounds);
}
 
google.maps.event.addDomListener(window, 'load', initialize);