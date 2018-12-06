function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: {lat: -34.397, lng: 150.644}
    });
   
    var geocoder = new google.maps.Geocoder();

    window.addEventListener('load', function() {
      geocodeAddress(geocoder, map);
      
    });   
  }

  function geocodeAddress(geocoder, resultsMap) {
    var address = document.getElementById('address').value;
    geocoder.geocode({'address': address}, function(results, status) {
      if (status === 'OK') {

        resultsMap.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location,
          zoom:50
        });
        
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }