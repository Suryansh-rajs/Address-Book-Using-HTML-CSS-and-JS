const contactLink = document.getElementById("contact-link");
const contactPopup = document.getElementById("contact-popup");

contactLink.addEventListener("click", function(event) {
    event.preventDefault();
    contactPopup.classList.add("active");
});

contactPopup.addEventListener("click", function(event) {
    if (!event.target.closest(".contact-popup-content")) {
        contactPopup.classList.remove("active");
    }
});
