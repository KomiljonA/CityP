var map = L.map('map').setView([38.56295, 68.7966], 19);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var greenIcon = L.icon({
    iconUrl: 'icon/cp.svg',
    iconSize: [40, 40],
    popupAnchor:  [0, -25]
});

/*Первая точка*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker1 = L.marker([38.56300, 68.79647], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.56297, 68.79564],
    [38.56300, 68.79731]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker1, polygon]).addTo(map);
/*дальше*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker2 = L.marker([38.56002, 68.79905], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.56143, 68.79890],
    [38.55861, 68.79914]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker2, polygon]).addTo(map);

/*дальше*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker3 = L.marker([38.56002, 68.79975], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.56143, 68.79960],
    [38.55861, 68.79984]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker3, polygon]).addTo(map);

/*дальше*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker4 = L.marker([38.55817, 68.79753], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.55827, 68.79893],
    [38.55807, 68.79633]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker4, polygon]).addTo(map);

/*дальше*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker5 = L.marker([38.55806, 68.79804], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.55813, 68.79896],
    [38.558, 68.79713]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker5, polygon]).addTo(map);

/*дальше*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker6 = L.marker([38.56202, 68.79443], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.56282, 68.79435],
    [38.56122, 68.79453]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker6, polygon]).addTo(map);

/*дальше*/
var polygonContent = '<div class="parking-info">' +
  '<div class="parking-info__title">Парковка</div>' +
  '<div class="parking-info__subtitle">ул. Абая 92</div>' +
  '<div class="parking-info__time">Время работы: круглосуточно</div>' +
  '<div class="parking-info__rate">Стоимость: 50 руб./час</div>' +
'</div>';

var marker6 = L.marker([38.55949, 68.79473], {icon: greenIcon})
    .bindPopup(polygonContent);

var polygon = L.polygon([
    [38.56105, 68.79457],
    [38.55794, 68.79488]
], {
    fillColor: '#3388ff',
    fillOpacity: 0.3,
    color: '#3388ff',
    weight: 7
}).bindPopup(polygonContent);

var group = L.layerGroup([marker6, polygon]).addTo(map);