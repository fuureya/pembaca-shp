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
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>
    <div id="map">
        {{-- {{ $data }} --}}
    </div>

    <script>
        // let myStyle = {
        //     "color": "#ff7800",
        //     "weight": 5,
        //     "opacity": 0.65
        // };
        // L.geoJSON(data, {
        //     style: myStyle
        // }).addTo(map);

        let points = @json($point);
        points.forEach(point => {
            console.log(`x: ${point.x}, y: ${point.y}`);
            var map = L.map('map').setView([point.x, point.y], 13);
            // You can add code here to use the point data as needed
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
        });

        // var map = L.map('map').setView([51.505, -0.09], 13);
        // L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     maxZoom: 19,
        //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        // }).addTo(map);

        // var marker = L.marker([51.5, -0.09]).addTo(map);
        // var circle = L.circle([51.5, -0.09], {
        //     color: 'red',
        //     fillColor: '#f03',
        //     fillOpacity: 0.5,
        //     radius: 500
        // }).addTo(map);
    </script>

</body>

</html>
