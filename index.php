<?php


require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();



//locate the IP
$geoplugin->locate();
$geoplugin->region;






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    $map{
        height: 400px;
        width: 100%;
    }
    </style>
</head>
<body>
    <h3>Location: <?php echo $geoplugin->city;?>,<?php echo $geoplugin->region; ?> (<?php echo $geoplugin->countryName;?>)</h3>
    <div id="map"></div>
    <script>
      function initMaps(){
          var uluru = (lat : <?php echo $geoplugin->latitude;?>, lng: <?php echo $geoplugin->longitude;?>);
          var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 4,
              center: uluru
          });
          var marker = new google.maps.Marker({
              position: uluru,
              map: map
          });
      }
    </script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9xfE7BGLArNAOtGo32g5KdFCsOPC2-ms&callback=initMap">
</script>
    
    <script>
        var geonew = '<?php echo $geoplugin->city;?>';
        
        "use strict";
let geo =    [

    {
     
      city: "Cape Town",
 
      case: "3628",

    }

]
let geos = geo.find(element => element.city === geonew );
for(i=0; i < geo.length; i++){
    let a = geo[i];
    alert(`Place: ${a.city}, Case${a.case}`);
 
}

    </script>


</body>
</html>