// NAVIGATION
let mainNav = document.querySelector("#js-menu");
let navBarToggle = document.querySelector("#js-navbar-toggle");

navBarToggle.addEventListener("click", function() {
  mainNav.classList.toggle("active");
});

// MAP
var map = L.map('map').setView([44.789330, 20.462280], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([44.789330, 20.462280]).addTo(map)
    .bindPopup('Restaurant Cache.<br> Humska 8.')
    .openPopup();