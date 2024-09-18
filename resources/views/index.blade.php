<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <title>Test Membaca File shp</title>
    <style>
        #map {
            width: 1000px;
            height: 1000px;
        }
    </style>
</head>

<body>
    <div id="test">

    </div>
    <div id="map">
        {{-- {{ $data }} --}}
    </div>

    <script src="{{ asset('main.js') }}" type="module">
        // let myStyle = {
        //     "color": "#ff7800",
        //     "weight": 5,
        //     "opacity": 0.65
        // };
        // L.geoJSON(data, {
        //     style: myStyle
        // }).addTo(map);



        // var map = L.map('map').setView([119.78515449800013, -5.208919154999964], 13);
        // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org">OpenStreetMap</a>'
        // }).addTo(map);

        // let dataTest = [
        //     [119.78515449800013, -5.208919154999964],
        //     [119.7842610470001, -5.208667625999936]
        // ]

        // let points = @json($point);
        // let data = Object.values(points)
        // let hasil = data.map(point => [point.x, point.y]);
        // console.log(hasil)
        // var polygon = L.polygon([dataTest], {
        //     color: 'red',
        //     fillColor: '#f03',
        //     fillOpacity: 0.5,
        // }).addTo(map);
    </script>

</body>

</html>
