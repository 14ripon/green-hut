var $cache = {},
  oLocale = {
    SG: {
      country: 'Singapore',
      center: { lat:1.352083, lng:103.819836 }
    },
  },
  oMapOptions = {
    center: oLocale['SG'].center,
    disableDefaultUI: true,
    zoom: 12,
    zoomControl: true
  };

function initMap() {
  $cache.map = new google.maps.Map(document.getElementById('map'), oMapOptions);
  var places = new google.maps.places.PlacesService($cache.map);
  $('#map-search').keyup(function(e) {
    // Search on pressing Enter
    if (e.keyCode===13 && $.trim(this.value)) {
      places.textSearch({
        bounds: $cache.map.getBounds(),
        query: this.value,
        type: ['address']
      }, handleResults);
    }
  });
}

function handleResults(results, status) {
  if (status===google.maps.places.PlacesServiceStatus.OK) {
    // Generate a marker and for each place
    var bounds = new google.maps.LatLngBounds();
    for (var i=0, imax=results.length; i<imax; ++i) {
      createMarker(results[i]);
      if (results[i].geometry.viewport) {
        // Only geocodes have viewport
        bounds.union(results[i].geometry.viewport);
      } else {
        bounds.extend(results[i].geometry.location);
      }
    }
    if (results.length===1) {
      // fitBounds() zooms in too closely for one marker, so manually set the
      // zoom in this case
      $cache.map.setCenter(bounds.getCenter());
      $cache.map.setZoom(9);
    } else {
      // Zoom in optimally to show all markers
      $cache.map.fitBounds(bounds);
    }
  } else {
    alert('Place not found :(');
  }
}

function createMarker(place) {
  var icon = {
    anchor: new google.maps.Point(17, 34),
    origin: new google.maps.Point(0, 0),
    scaledSize: new google.maps.Size(25, 25),
    size: new google.maps.Size(71, 71),
    url: place.icon
  },
  marker = new google.maps.Marker({
    cursor: 'hand',
    icon: icon,
    map: $cache.map,
    position: place.geometry.location,
    title: place.name
  });
}

initMap();