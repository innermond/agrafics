<div id="map"></div>
<script>
  function initMap() {
    var agrafics = {lat: 44.4364947, lng: 26.1045263};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: agrafics
    });
    var marker = new google.maps.Marker({
      position: agrafics,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwr3AAxAs9FeOao3qq4fhQNKaMEmjUWbo&callback=initMap">
</script>
