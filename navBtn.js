const menuBtn = document.querySelector('.menu-btn');
const navLinks = document.querySelector('.nav-links');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
    navLinks.classList.remove('mobile-menu');
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
    navLinks.classList.add('mobile-menu');
  }
});

window.addEventListener("scroll", function(){
  var header = this.document.querySelector("nav");
  header.classList.toggle("sticky", window.scrollY > 0);
});