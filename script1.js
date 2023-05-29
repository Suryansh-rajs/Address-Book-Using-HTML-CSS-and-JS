const popup = document.getElementById('popup');
function closePopup() {
    popup.classList.remove('show');
}
document.querySelector('.About-link').addEventListener('click', function (event) {
    event.preventDefault();
    popup.classList.add('show');

});


const popup1 = document.getElementById('popup1');
function closePopup() {
    popup1.classList.remove('show');
}
document.querySelector('.contact-link').addEventListener('click', function (event) {
    event.preventDefault();
    popup1.classList.add('show');
});

function showLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        var mapUrl = "https://www.google.com/maps?q=" + lat + "," + lng;
        window.open(mapUrl, "_blank");
      });
    } else {
      alert("Geolocation is not supported by this browser.");
    }
  }

  const signupLink = document.getElementById("signup-link");
                    const signupForm = document.querySelector(".signup-form");
                    const closeBtn = document.querySelector(".login");
                    signupLink.addEventListener("click", function (event) {
                    event.preventDefault();
                    signupForm.style.opacity = "1";
                    signupForm.style.pointerEvents = "auto";
                    });
                    closeBtn.addEventListener("click", function (event) {
                    event.preventDefault();
                    signupForm.style.opacity = "0";
                    signupForm.style.pointerEvents = "none";
                    });