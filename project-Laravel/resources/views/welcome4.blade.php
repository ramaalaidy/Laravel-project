
<div class="d-none d-sm-block mb-5 pb-4">
  <div id="map" style="height: 420px;"></div>
  <script>
    function initMap() {
      var uluru = {lat: -25.363, lng: 131.044};
      var grayStyles = [
        {
          featureType: "all",
          stylers: [
            { saturation: -90 },
            { lightness: 50 }
          ]
        },
        {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
      ];
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -31.197, lng: 150.744},
        zoom: 9,
        styles: grayStyles,
        scrollwheel:  false
      });
    }
    
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
  