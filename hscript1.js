const aboutLink = document.getElementById("about-link");
            const aboutSection = document.getElementById("about-section");
            aboutLink.addEventListener("mouseenter", function() {
            aboutSection.style.display = "block";
            });
            aboutLink.addEventListener("mouseleave", function() {
            aboutSection.style.display = "none";
            });