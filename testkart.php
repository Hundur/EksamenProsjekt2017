<div style="overflow: hidden;">

    <div style="width:190px; float:left; margin:auto; border: 1px solid #ccc; margin-right: 8px;">

        <div class="tab">
            <button class="tablinks" onclick="openForm(event, 'form1')" id="defaultOpen">Search</button>
            <button class="tablinks" onclick="openForm(event, 'form2')">Add</button>
        </div>

        <div id="form1" class="tabcontent">
            <form method="post" id="formpost">
                <input type="text" name="places" id="textbox" autocomplete="off" placeholder='Områder for søket...'>
                <div id="checkboxhide">
                <br><br>
                <input type="checkbox" name="locationtype[]" value="matbutikk" id="matbutikk"><label for="matbutikk"><span><span></span></span>Matbutikker</label><br>
                <input type="checkbox" name="locationtype[]" value="restaurant" id="restaurant"><label for="restaurant"><span><span></span></span>Resaurant</label><br>
                <input type="checkbox" name="locationtype[]" value="aktivitet" id="aktivitet"><label for="aktivitet"><span><span></span></span>Aktivitet</label><br>
                <input type="checkbox" name="locationtype[]" value="treningssenter" id="treningsenter"><label for="treningsenter"><span><span></span></span>Treningsenter</label><br>
                <input type="checkbox" name="locationtype[]" value="skole" id="skole"><label for="skole"><span><span></span></span>Skole</label><br>
                <input type="checkbox" name="locationtype[]" value="buss" id="buss"><label for="buss"><span><span></span></span>Buss</label><br>
                <input type="submit" id="submit" name="submit" value="Submit">
                </div>
            </form> 
        </div>
        <div id="form2" class="tabcontent"><br>
            <form method="post" id="formadd">
                <input type='text' name='name' id='name' class='dataadd' placeholder='Stedsnavn' autocomplete="off"/>
                <input type='text' name='area' id='area' class='dataadd' placeholder='Område' autocomplete="off"/> 
                <input type='text' name='city' id='city' class='dataadd' placeholder='By' autocomplete="off"/> 
                <input type='text' name='lat' id='lat' class='dataadd' readonly="readonly" placeholder='Latitude' autocomplete="off">    
                <input type='text' name='lng' id='lng' class='dataadd'  readonly="readonly"placeholder='Longitude' autocomplete="off"> 
                <select id='type' name="type"> 
                    <option disabled selected value="blank">Velg en type</option>
                    <option value='matbutikk' id='mat'>Matbutikk</option>
                    <option value='restaurant' id='res'>Restaurant</option>
                    <option value='aktivitet' id='akt'>Aktivitet</option>
                    <option value='treningsenter' id='tre'>Treningsenter</option>
                    <option value='skole' id='skl'>Skole</option>
                    <option value='buss' id='bus'>Buss</option>
                </select>
                <textarea name="description" id="description" form="formadd" rows="4" placeholder="beskrivelse..."></textarea>
                <input type='submit' value='Save' id='save'/>
            </form>
        </div>
    </div>

    <div id="formaddvalidate" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="formaddvalclose">&times;</span>
                <h2 id="addtexth2"></h2>
            </div>
            <div class="modal-body">
                <p id="addtext"></p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>

    <div id="formpostvalidate" class="modal">
        <div class="modal-content">
            <div class="modal-header">
            <span class="close" id="formpostvalclose">&times;</span>
                <h2 id="postTexth2"></h2>
            </div>
            <div class="modal-body">
                <p id="postText"></p>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>

    <div id="map" style="width:800px;height:500px; float: left; margin auto;"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAX_U9LDG8qS-1G7DJbR0rEq8Y68OTYf9M&callback=initMap"
    type="text/javascript"></script>
    <script>
        var markerinfo;
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
            center: new google.maps.LatLng(59.911491, 10.757933),
            disableDoubleClickZoom: true, 
            zoom: 14
            });

            map.setOptions({styles: [
                {elementType: 'geometry', stylers: [{color: '#ebe3cd'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#523735'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#f5f1e6'}]},
                {
                featureType: 'administrative',
                elementType: 'geometry.stroke',
                stylers: [{color: '#c9b2a6'}]
                },
                {
                featureType: 'administrative.land_parcel',
                elementType: 'geometry.stroke',
                stylers: [{color: '#dcd2be'}]
                },
                {
                featureType: 'administrative.land_parcel',
                elementType: 'labels.text.fill',
                stylers: [{color: '#ae9e90'}]
                },
                {
                featureType: 'landscape.natural',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
                },
                {
                featureType: 'poi',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
                },
                {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{color: '#93817c'}]
                },
                {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{color: '#447530'}]
                },
                {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{color: '#f5f1e6'}]
                },
                {
                featureType: 'road.arterial',
                elementType: 'geometry',
                stylers: [{color: '#fdfcf8'}]
                },
                {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{color: '#f8c967'}]
                },
                {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{color: '#e9bc62'}]
                },
                {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry',
                stylers: [{color: '#e98d58'}]
                },
                {
                featureType: 'road.highway.controlled_access',
                elementType: 'geometry.stroke',
                stylers: [{color: '#db8555'}]
                },
                {
                featureType: 'road.local',
                elementType: 'labels.text.fill',
                stylers: [{color: '#806b63'}]
                },
                {
                featureType: 'transit.line',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
                },
                {
                featureType: 'transit.line',
                elementType: 'labels.text.fill',
                stylers: [{color: '#8f7d77'}]
                },
                {
                featureType: 'transit.line',
                elementType: 'labels.text.stroke',
                stylers: [{color: '#ebe3cd'}]
                },
                {
                featureType: 'transit.station',
                elementType: 'geometry',
                stylers: [{color: '#dfd2ae'}]
                },
                {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [{color: '#b9d3c2'}]
                },
                {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{color: '#92998d'}]
                }
                ]
            });
            var bounds  = new google.maps.LatLngBounds();
            markerinfo = new google.maps.InfoWindow();

            google.maps.event.addDomListener(map, 'click', function(e) {
            $("#lat").val(e.latLng.lat());
            $("#lng").val(e.latLng.lng());
            });

            $("#formpost").on('submit', function (e) {

                e.preventDefault();

                var places = $("#textbox").val();
                var locationtype = new Array();
                $( "input[name='locationtype[]']:checked" ).each( function(){
                    locationtype.push( $(this).val());
                });

                if((places != '') && (locationtype.length > 0)){
                    $.ajax({

                        type: "POST",
                        url: "phpxml.php",
                        data: {
                            locationtype: locationtype,
                            places: places
                        },
                        success: function(data) {
                            for (i in data) {
                                var myLatLng = new google.maps.LatLng(data[i].lat, data[i].lng);

                                var infowincontent = document.createElement('div');
                                var strong = document.createElement('strong');
                                strong.textContent = data[i].name;
                                infowincontent.appendChild(strong);
                                infowincontent.appendChild(document.createElement('br'));

                                var text = document.createElement('text');
                                text.textContent = data[i].description;
                                infowincontent.appendChild(text);
                                var icon = customLabel[data[i].type] || {};
                                var marker = new google.maps.Marker({
                                    map: map,
                                    position: myLatLng,
                                    label: icon.label
                                });

                                google.maps.event.addListener(marker, 'click', function() {
                                    if(!marker.open){
                                        markerinfo.setContent(infowincontent);
                                        markerinfo.open(map, marker);
                                        marker.open = true;
                                    }
                                    else{
                                        markerinfo.close();
                                        marker.open = false;
                                    }
                                    google.maps.event.addListener(map, 'click', function() {
                                        markerinfo.close();
                                        marker.open = false;
                                    });
                                });

                                bounds.extend(myLatLng);
                            }

                            map.fitBounds(bounds);
                        }
                    });

                    this.reset();

                }else if ((places == '') && (locationtype.length > 0)){

                $("#postTexth2").html("Tomme felt for søket");
                $("#postText").html("Du har ikke valgt noen områder for søket enda");
                $("#formpostvalidate").show();

                $("#formpostvalclose").click(function(){
                    $("#formpostvalidate").hide();
                });

                $('html').click(function(evt) {
                    if ($(evt.target).parents('#formpostvalidate').length>0) return;

                    $('#formpostvalidate').hide();

                    $(this).unbind(evt);
                });

                }else if ((places != '') && (locationtype.length == 0)){
                $("#postTexth2").html("Tomme felt for søket");
                $("#postText").html("Du har ikke valgt noen typer for søket");
                $("#formpostvalidate").show();

                $("#formpostvalclose").click(function(){
                    $("#formpostvalidate").hide();
                });

                $('html').click(function(evt) {
                    if ($(evt.target).parents('#formpostvalidate').length>0) return;

                    $('#formpostvalidate').hide();

                    $(this).unbind(evt);
                });
                }else{
                    alert("Søket er tomt")
                }
            });

            var zoomonce = true;
            google.maps.event.addListener(map, 'zoom_changed', function() {
                zoomChangeBoundsListener = google.maps.event.addListener(map, 'bounds_changed', function(event) {
                    if (this.getZoom() > 15 && zoomonce == true){
                        this.setZoom(15);
                        zoomonce = false;
                    }

                    google.maps.event.removeListener(zoomChangeBoundsListener);

                });
            });
        }

        $("#formadd").on('submit', function (e) {
            e.preventDefault();
            var validate = validateformadd();
            if (validate == true){
                $.ajax({
                    type: 'POST',
                    url: 'adddata.php',
                    data: $('#formadd').serialize(),
                });

                this.reset();
            }else{
                var emptyfield = getemptyinput();
                $("#addtexth2").html('Du har ikke fyllt ut alle feltene');
                $("#addtext").html("<strong>Tomme Felt:</strong> <br>" + emptyfield);
                $()
                $("#formaddvalidate").show();

                $("#formaddvalclose").click(function(){
                $("#formaddvalidate").hide();
                });

                $('html').click(function(evt) {
                    if ($(evt.target).parents('#formaddvalidate').length>0) return;

                    $('#formaddvalidate').hide();

                    $(this).unbind(evt);
                });
            }
        });

        var customLabel = {
            restaurant: {
                label: 'R'
            },
            matbutikk: {
                label: 'M'
            },
            aktivitet: {
                label: 'A'
            },
            treningsenter: {
                label: 'T'
            },
            skole: {
                label: 'S'
            },
            buss: {
                label: 'B'
            }
        };

        function validateformadd(){
            var name = $("#name").val();
            var area = $("#area").val();
            var city = $("#city").val();
            var lat = $("#lat").val();
            var lng = $("#lng").val();
            var type = $('#type option:selected');
            var description = $("#description").val();

            if(name == ""){
                return false;
            }

            if(area == ""){
                return false;
            }

            if(city == ""){
                return false;
            }

            if(lat == "" || lat == 0){
                return false;
            }

            if(lng == "" || lng == 0){
                return false;
            }

            if(type){
                return false;
            }

            if( description == "") {
                return false;
            }
            return(true);
        }

        function getemptyinput(){
            var name = $("#name").val();
            var area = $("#area").val();
            var city = $("#city").val();
            var lat = $("#lat").val();
            var lng = $("#lng").val();
            var type = $('#type option:selected');
            var description = $("#description").val();

            var emptyinput = '';

            if(name == ""){
                emptyinput += 'Stedsnavn <br>';
            }

            if(area == ""){
                emptyinput += 'Område <br>';
            }

            if(city == ""){
                emptyinput += 'By <br>'
            }

            if(lat == "" || lat == 0){
                emptyinput += 'Latitude <br>';
            }

            if(lng == "" || lng == 0){
                emptyinput += 'Longitude <br>';
            }

            if(type){
                emptyinput += 'Type <br>';
            }

            if(description == "") {
                emptyinput += 'Beskrivelse <br>';
            }
            return emptyinput;
        }

        function openForm(evt, formName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(formName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        
document.getElementById("defaultOpen").click();
    </script>
</div>