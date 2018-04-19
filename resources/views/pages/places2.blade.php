<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgtBPaE9dibaROaiawYcekiYai6tWdQcE&libraries=places"></script>
</head>
<body>
<label for="locationTextField">Location</label>
<input id="locationTextField" type="text" size="50">

<script>
    function init() {
        var input = document.getElementById('locationTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }

    google.maps.event.addDomListener(window, 'load', init);
</script>
</body>
</html>
