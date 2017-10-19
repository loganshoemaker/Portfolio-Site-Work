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

$( document ).ready(function() {
    menuToggle.addEventListener("click", function() {
        if (siteNav.classList) { 
            siteNav.classList.toggle("nav-opened");
        } else {
            var classes = siteNav.className.split(" ");
            var i = classes.indexOf("nav-opened");
            if (i >= 0) 
                classes.splice(i, 1);
            else 
                classes.push("nav-opened");
                siteNav.className = classes.join(" "); 
        }
    })
    $('.next:last').addClass('next-last');
    $('.next-last').attr('href', '#portfolio-id-1');
    $("a").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        }
    });
})
