// Get the button:
let scrollup = document.getElementById("scroll-up");

// When the user scrolls down 20px from the top of the document, show the button

const scrollFunction = (e) => {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollup.style.opacity = 1;
    } else {
        scrollup.style.opacity = 0;
    }
}
window.onscroll = scrollFunction;

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}