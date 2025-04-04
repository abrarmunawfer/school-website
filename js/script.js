// Toggle the menu for mobile view
function toggleMenu() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

// Toggle the dropdown menu on click
function toggleDropdown() {
    var dropdown = document.querySelector(".dropdown");
    dropdown.classList.toggle("active");
}
  

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  // Script for slideshow
  var slideIndex = 1;
  var timer = null;
  showSlides(slideIndex);

  // Next/previous controls
  function plusSlides(n) {
    clearTimeout(timer);	
    showSlides(slideIndex += n);
  }

  // Thumbnail image controls
  function currentSlide(n) {
    clearTimeout(timer);
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n===undefined) {n= ++slideIndex;}
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    timer = setTimeout(showSlides, 4000);
  }
  // Script for slideshow

  function myDropdownfunction(){
      document.getElementById("myDropdown").
      classList.toggle("show");
  }

  window.onclick = function(e){
      if (!e.target.matches('.dropbtn')) {
          var myDropdown = document.getElementById("myDropdown");
          if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
          }
      }
  }