function initMap() {
  var myLatLng = {lat:41.394308, lng:2.128065};
  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 13,
    mapTypeControl: false,
    fullscreenControl: false,
    styles: [
      {elementType: 'geometry', stylers: [{color: '#1d2c4d'}]},
      {elementType: 'labels.text.stroke', stylers: [{color: '#1a3646'}]},
      {elementType: 'labels.text.fill', stylers: [{color: '#8ec3b9'}]},
      {
        featureType: "administrative",
        elementType: "geometry",
        stylers: [{visibility: "off"}]
      },
      {
        featureType: "administrative.country",
        elementType: "geometry.stroke",
        stylers: [{color: "#4b6878"}]
      },
      {
        featureType: "administrative.land_parcel",
        elementType: "labels.text.fill",
        stylers: [{"color": "#64779e"}]
      },
      {
        featureType: "administrative.neighborhood",
        stylers: [{visibility: "off"}]
      },
      {
        featureType: "administrative.province",
        elementType: "geometry.stroke",
        stylers: [{color: "#4b6878"}]
      },
      {
        featureType: "landscape.man_made",
        elementType: "geometry.stroke",
        stylers: [{color: "#334e87"}]
      },
      {
        featureType: "landscape.natural",
        elementType: "geometry",
        stylers: [{color: "#023e58"}]
      },
      
      {
        featureType: "poi",
        stylers: [{visibility: "off"}]
      },
      {
        featureType: "poi",
        elementType: "geometry",
        stylers: [{color: "#283d6a"}]
      },
      {
        featureType: "poi",
        elementType: "labels.text",
        stylers: [{visibility: "off"}]
      },
      {
        featureType: "poi",
        elementType: "labels.text.fill",
        stylers: [{color: "#6f9ba5"}]
      },
      {
        featureType: "poi",
        elementType: "labels.text.stroke",
        stylers: [{color: "#1d2c4d"}]
      },
      {
        featureType: "poi.park",
        elementType: "geometry.fill",
        stylers: [{color: "#023e58"}]
      },
      {
        featureType: "poi.park",
        elementType: "labels.text.fill",
        stylers: [{color: "#3C7680"}]
      },
      {
        featureType: "road",
        elementType: "geometry",
        stylers: [{color: "#304a7d"}]
      },
      {
        featureType: "road",
        elementType: "labels",
        stylers: [{visibility: "off"}]
      },
      {
        featureType: "road",
        elementType: "labels.icon",
        stylers: [{visibility: "off"}]
      },
      {
        featureType: "road",
        elementType: "labels.text.fill",
        stylers: [{color: "#98a5be"}]
      },
      {
        featureType: "road",
        elementType: "labels.text.stroke",
        stylers: [{color: "#1d2c4d"}]
      },
      {
        featureType: "road.highway",
        elementType: "geometry",
        stylers: [{color: "#2c6675"}]
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [{color: "#255763"}]
      },
      {
        featureType: "road.highway",
        elementType: "labels.text.fill",
        stylers: [{color: "#b0d5ce"}]
      },
      {
        featureType: "road.highway",
        elementType: "labels.text.stroke",
        stylers: [{color: "#023e58"}]
      },
      {
        featureType: "transit",
        stylers: [{"visibility": "off"}]
      },
      {
        featureType: "transit",
        elementType: "labels.text.fill",
        stylers: [{color: "#98a5be"}]
      },
      {
        featureType: "transit",
        elementType: "labels.text.stroke",
        stylers: [{color: "#1d2c4d"}]
      },
      {
        featureType: "transit.line",
        elementType: "geometry.fill",
        stylers: [{color: "#283d6a"}]
      },
      {
        featureType: "transit.station",
        elementType: "geometry",
        stylers: [{color: "#3a4762"}]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#0e1626'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#4e6d70'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text',
        stylers: [{visibility: "off"}]
      }
    ]
  });
  var pinColor = "48EAC7";
  var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
      new google.maps.Size(21, 34),
      new google.maps.Point(0,0),
      new google.maps.Point(10, 34));
  var pinShadow = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_shadow",
    new google.maps.Size(40, 37),
    new google.maps.Point(0, 0),
    new google.maps.Point(12, 35));
  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: pinImage,
      shadow: pinShadow
  });
  marker.setMap(map);
}
