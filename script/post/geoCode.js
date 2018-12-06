

function getCoordinates(address,callback){
    geocoder=new google.maps.Geocoder();
    var coordinates;
    geocoder.geocode({address: address}, function (results, status){
        coords_obj = results[0].geometry.location;
        coordinates=[coords_obj.nb,coords_obj.ob];
        callback(coordinates);

    })
    
}