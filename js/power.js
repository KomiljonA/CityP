var map = L.map('map').setView([38.56295, 68.7966], 17);

L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var greenIcon = L.icon({
    iconUrl: 'icon/power.svg',
    iconSize: [40, 40],
    popupAnchor:  [0, -25]
});

var parkingData = [  {    coordinates: [38.56300, 68.79647],
  },
  {
    coordinates: [38.56002, 68.79905],
  },
  {
    coordinates: [38.56002, 68.79975],
  },
    {
    coordinates: [38.55949, 68.79473],
  },
    {
    coordinates: [38.56202, 68.79443],
  },
  {
    coordinates: [38.55817, 68.79753],
  }
];

for (var i = 0; i < parkingData.length; i++) {
  var polygonContent = '<div class="parking-info">' +
    '<div class="parking-info__title">Power</div>' +
    '<div class="parking-info__subtitle">ул. Абая 92</div>' +
    '<div class="parking-info__time">Время работы: круглосуточно</div>' +
    '<div class="parking-info__rate">Стоимость: 3 сом./час</div>' +
  '</div>';

  var marker = L.marker(parkingData[i].coordinates, {icon: greenIcon}).bindPopup(polygonContent);

  var group = L.layerGroup([marker]).addTo(map);
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
