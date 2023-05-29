const findLink = document.getElementById("find-link");
            findLink.addEventListener("click", function(event) {
            event.preventDefault();
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showMap);
            } else {
                alert("Geolocation is not supported by your browser.");
            }
            });
            function showMap(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            const googleMapsUrl = `https://www.google.com/maps?q=${latitude},${longitude}`;
            window.open(googleMapsUrl, "_blank");
            }