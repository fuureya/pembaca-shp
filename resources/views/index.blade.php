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
        {{ $data }}
    </div>

    <script>
        let data = "{{ $data }}"
        let myStyle = {
            "color": "#ff7800",
            "weight": 5,
            "opacity": 0.65
        };
        L.geoJSON(data, {
            style: myStyle
        }).addTo(map);
    </script>

</body>

</html>
