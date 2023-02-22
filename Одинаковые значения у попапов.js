var map = L.map('map').setView([38.56295, 68.7966], 19);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var greenIcon = L.icon({
    iconUrl: 'icon/cp.svg',
    iconSize: [40, 40],
    popupAnchor:  [0, -25]
});

var parkingData = [  {    coordinates: [38.56300, 68.79647],
    polygonCoordinates: [
      [38.56297, 68.79564],
      [38.56300, 68.79731]
    ]
  },
  {
    coordinates: [38.56002, 68.79905],
    polygonCoordinates: [
      [38.56143, 68.79890],
      [38.55861, 68.79914]
    ]
  },
  {
    coordinates: [38.56002, 68.79975],
    polygonCoordinates: [
      [38.56143, 68.79960],
      [38.55861, 68.79984]
    ]
  },
    {
    coordinates: [38.55949, 68.79473],
    polygonCoordinates: [
      [38.56282, 68.79435],
      [38.56122, 68.79453]
    ]
  },
    {
    coordinates: [38.56202, 68.79443],
    polygonCoordinates: [
      [38.56075, 68.79461],
      [38.55794, 68.79488]
    ]
  },
  {
    coordinates: [38.55817, 68.79753],
    polygonCoordinates: [
      [38.55827, 68.79893],
      [38.55807, 68.79633]
    ]
  }
];

for (var i = 0; i < parkingData.length; i++) {
  var polygonContent = '<div class="parking-info">' +
    '<div class="parking-info__title">Парковка</div>' +
    '<div class="parking-info__subtitle">ул. Абая 92</div>' +
    '<div class="parking-info__time">Время работы: круглосуточно</div>' +
    '<div class="parking-info__rate">Стоимость: 3 сом./час</div>' +
  '</div>';

  var marker = L.marker(parkingData[i].coordinates, {icon: greenIcon}).bindPopup(polygonContent);

  var polygon = L.polygon(parkingData[i].polygonCoordinates, {
      fillColor: '#0A66E6',
      fillOpacity: 0.6,
      color: '#0A66E6',
      opacity: 0.6,
      weight: 9
  }).bindPopup(polygonContent);

  var group = L.layerGroup([marker, polygon]).addTo(map);
}
/*Добавляем поиск по местонахождению*/
// Создаем объект иконки
var customIcon = L.icon({
  iconUrl: 'icon/YourPasition.svg',
  iconSize: [38, 38],
  iconAnchor: [19, 19],
  popupAnchor: [0, -19]
});

// Локализация
map.locate({setView: true, maxZoom: 16});

function onLocationFound(e) {
    var radius = e.accuracy;

    // Используем созданную иконку
    L.marker(e.latlng, {icon: customIcon}).addTo(map)
        .bindPopup("Вы находитесь в " + radius + " метров от этой точки").openPopup();
}

map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);
