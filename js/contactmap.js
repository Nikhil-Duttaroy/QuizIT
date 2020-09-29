
console.log("hello");
var mymap = L.map('mapid').setView([18.990292, 73.127670], 16);


var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         mymap.addLayer(layer);

var marker = L.marker([18.990292, 73.127670]).addTo(mymap);

marker.bindPopup("<b>Pillai College of Engineering").openPopup();
var popup = L.popup();

// var circle = L.circle({lat : 18.990292,lng : 73.127670}, {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 500
// }).addTo(mymap);
// var circle = L.circle([18.9894, 73.1175], {
//     color: 'red',
//     fillColor: '#f03',
//     fillOpacity: 0.5,
//     radius: 100
// }).addTo(mymap);

var polygon = L.polygon([
    [18.9894, 73.1175],
    [18.9880, 73.1170],
    [18.9886, 73.1180]
]).addTo(mymap);



function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Clicked at location " + e.latlng.toString())
        .openOn(mymap);
}
mymap.on('click', onMapClick);