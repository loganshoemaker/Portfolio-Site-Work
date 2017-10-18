const menuToggle = document.getElementById("menuToggle");
const siteNav = document.getElementById("site-navigation");
const portfolioNext = document.getElementById("next-item");
const project = document.getElementsByClassName("project");

window.onload = function() {
    
    let items = document.getElementsByClassName('styled-separator');
    
    console.log(items); 
    
    for (var i = 0; i < items.length; i++) {

        items[i].className += (' styled-seperator-').concat(i % 3);
        
    }

}

menuToggle.addEventListener("click", function() {
    
    if (siteNav.classList) { 

        siteNav.classList.toggle("nav-opened");

    } else {
        // For IE9
        var classes = siteNav.className.split(" ");
        var i = classes.indexOf("nav-opened");

        if (i >= 0) 
            classes.splice(i, 1);
        else 
            classes.push("nav-opened");
            siteNav.className = classes.join(" "); 
    }
})

$( document ).ready(function() {
    
    $('.next-article:last').hide();

  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 700, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
        
    } // End if
      
  });
    
})
