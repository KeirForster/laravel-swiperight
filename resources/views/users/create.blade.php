@extends ('pages.master')

@section ('title')
    Your New Profile
@stop

@section ('header')
    <h1>SwipeRightToApply: Create Your Profile</h1>
@stop

@section ('css')
    #locationField, #controls {
    position: relative;
    width: 480px;
    }
    #autocomplete {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 99%;
    }
    .label {
    text-align: right;
    font-weight: bold;
    width: 100px;
    color: #303030;
    }
    #address {
    border: 1px solid #000090;
    background-color: #f0f0ff;
    width: 480px;
    padding-right: 2px;
    }
    #address td {
    font-size: 10pt;
    }
    .field {
    width: 99%;
    }
    .slimField {
    width: 80px;
    }
    .wideField {
    width: 200px;
    }
    #locationField {
    height: 20px;
    margin-bottom: 2px;
    }

    input[type=password] {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

    }
@stop

@section ('data')
    <hr>
    <div>
        {!! Form::open(['route' => 'storeuser']) !!}
        <div class="form-group">
            {!! Form::label('firstname', 'First Name:') !!}
            {!! Form::text('firstname', null, ['class'=>'form-control']) !!}

            {!! Form::label('middlename', 'Middle Name:') !!}
            {!! Form::text('middlename', null, ['class'=>'form-control']) !!}

            {!! Form::label('lastname', 'Last Name:') !!}
            {!! Form::text('lastname', null, ['class'=>'form-control']) !!}

            {!! Form::label('email', 'Email Address:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}

            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', null, ['']) !!}

            {!! Form::label('linkedinurl', 'LinkedIn URL:') !!}
            {!! Form::text('linkedinurl', null, ['class'=>'form-control']) !!}

            {!! Form::label('phone', 'Phone Number:') !!}
            {!! Form::text('phone', null, ['class'=>'form-control']) !!}

            {!! Form::label('extension', 'Extension:') !!}
            {!! Form::text('extension', null, ['class'=>'form-control']) !!}

            <div id="locationField" class="my-4">
                <input id="autocomplete" placeholder="Enter your address" class="form-control"
                       onFocus="geolocate()" type="text">
            </div>

            <table id="address">
                <tr>
                    <td class="label">Street address</td>
                    <td class="slimField"><input class="field" id="street_number" name="street_number" disabled="true"></td>
                    <td class="wideField" colspan="2"><input class="field" id="route" name="route" disabled="true"></td>
                </tr>
                <tr>
                    <td class="label">City</td>
                    <!-- Note: Selection of address components in this example is typical.
                         You may need to adjust it for the locations relevant to your app. See
                         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
                    -->
                    <td class="wideField" colspan="3"><input class="field" id="locality" name="locality" disabled="true"></td>
                </tr>
                <tr>
                    <td class="label">State</td>
                    <td class="slimField"><input class="field" id="administrative_area_level_1" name="administrative_area_level_1" disabled="true"></td>
                    <td class="label">Zip code</td>
                    <td class="wideField"><input class="field" id="postal_code" name="postal_code" disabled="true"></td>
                </tr>
                <tr>
                    <td class="label">Country</td>
                    <td class="wideField" colspan="3"><input class="field" id="country" name="country" disabled="true"></td>
                </tr>
            </table>

            <script>
                // This example displays an address form, using the autocomplete feature
                // of the Google Places API to help users fill in the information.

                // This example requires the Places library. Include the libraries=places
                // parameter when you first load the API. For example:
                // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                var placeSearch, autocomplete;
                var componentForm = {
                    street_number: 'short_name',
                    route: 'long_name',
                    locality: 'long_name',
                    administrative_area_level_1: 'short_name',
                    country: 'long_name',
                    postal_code: 'short_name'
                };

                function initAutocomplete() {
                    // Create the autocomplete object, restricting the search to geographical
                    // location types.
                    autocomplete = new google.maps.places.Autocomplete(
                        /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
                        {types: ['geocode']});

                    // When the user selects an address from the dropdown, populate the address
                    // fields in the form.
                    autocomplete.addListener('place_changed', fillInAddress);
                }

                function fillInAddress() {
                    // Get the place details from the autocomplete object.
                    var place = autocomplete.getPlace();

                    for (var component in componentForm) {
                        document.getElementById(component).value = '';
                        document.getElementById(component).disabled = false;
                    }

                    // Get each component of the address from the place details
                    // and fill the corresponding field on the form.
                    for (var i = 0; i < place.address_components.length; i++) {
                        var addressType = place.address_components[i].types[0];
                        if (componentForm[addressType]) {
                            var val = place.address_components[i][componentForm[addressType]];
                            document.getElementById(addressType).value = val;
                        }
                    }
                }

                // Bias the autocomplete object to the user's geographical location,
                // as supplied by the browser's 'navigator.geolocation' object.
                function geolocate() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var geolocation = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };
                            var circle = new google.maps.Circle({
                                                                    center: geolocation,
                                                                    radius: position.coords.accuracy
                                                                });
                            autocomplete.setBounds(circle.getBounds());
                        });
                    }
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgtBPaE9dibaROaiawYcekiYai6tWdQcE&libraries=places&callback=initAutocomplete"
                    async defer></script>

            {!! Form::submit('Create Profile', ['class'=>'btn btn-primary form-control mt-4']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop