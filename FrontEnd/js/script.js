const menuHumberger = document.querySelector('.menu-humberger');
const sidebar = document.querySelector('.sidebar');
const navigasi = document.querySelector('nav');
const content = document.querySelector('.content');


// Membuat objek media query dengan CSS
var mediaQuery = window.matchMedia("(min-width: 1200px)");

// Fungsi penanganan perubahan media query
function handleMediaQueryChange(mediaQuery) {
  
  if (mediaQuery.matches) {
    sidebar.classList.remove('side-off');
      navigasi.classList.remove('nav-off');
      content.classList.remove('content-off');
  } else {
    sidebar.classList.add('side-off');
    navigasi.classList.add('nav-off');
    content.classList.add('content-off');
  }
 
}

// Menjalankan fungsi untuk pertama kali
handleMediaQueryChange(mediaQuery);
mediaQuery.addEventListener("change", handleMediaQueryChange);

menuHumberger.addEventListener('click',function(e) {
    sidebar.classList.toggle('side-off');
    navigasi.classList.toggle('nav-off');
    if (mediaQuery.matches) {
      content.classList.toggle('content-off');
    }
    e.preventDefault()
})

