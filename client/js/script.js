// This variable keeps track of the current slide index
let slideIndex = 1;

// Show the first slide on page load
showSlides(slideIndex);

// Change slide based on the arrow button clicked
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Change slide based on the dot clicked
function currentSlide(n) {
showSlides(slideIndex = n);
}

// This function handles the display logic for the slides and dots
function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");

// If the index is greater than the number of slides, reset the index to 1
if (n > slides.length) {
slideIndex = 1;
}

// If the index is less than 1, set the index to the last slide
if (n < 1) {
slideIndex = slides.length;
}

// Hide all the slides
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}

// Remove the active class from all the dots
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}

// Show the current slide and add the active class to the corresponding dot
slides[slideIndex - 1].style.display = "block";
dots[slideIndex - 1].className += " active";
}

// This function validates the email and password inputs
function controleemail() {
var email = document.getElementById("email").value;
var x = email.indexOf('@');
var x1 = email.lastIndexOf('.');
var suff = email.substring(x + 1, x1);

// Check if the suffix is alphabetic
for (i = 0; i < suff.length; i++) {
if ((suff.charAt(i) < 'A') || (suff.charAt(i) > 'Z')) {
alert("Le suffixe doit obligatoirement être alphabétique !");
return false;
}
}

// Check if the password is at least 9 characters long
if (document.getElementById("password").value.length < 9) {
alert("Votre mot de passe doit contenir au moins 9 caractères");
document.getElementById("password").focus();
return false;
}
}


