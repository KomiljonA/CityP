/*Карта Главной страницы*/
var map = L.map('map').setView([38.56946,  68.79893], 19);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([38.56946,  68.79893]).addTo(map)
    .bindPopup('Зарядная станция')
    /*.openPopup();*/

    CartoDB_Positron.addTo(map);