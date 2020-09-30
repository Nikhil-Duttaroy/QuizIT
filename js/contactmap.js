var mymap = L.map('mapid').setView([18.990262, 73.127692], 13);

var layer = new L.TileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
 );
mymap.addLayer(layer);

var marker = L.marker([18.990262, 73.127692]).addTo(mymap);

var circle = L.circle([18.988443, 73.128613], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 50
}).addTo(mymap);

marker.bindPopup("Pillai College of Engineering").openPopup();
circle.bindPopup("Pillai's Hostel");


var popup = L.popup();  
function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Lat , Long =  " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

