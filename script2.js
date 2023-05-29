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