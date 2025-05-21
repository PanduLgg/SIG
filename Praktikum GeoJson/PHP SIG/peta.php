<!DOCTYPE html>
<html lang="en">
    <head>
        <link
            rel="stylesheet"
            href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
            crossorigin=""/>
        <style>
            #map {
                height: 400px;
            }
        </style>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script
            src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    </head>
    <body>
        <div id="map"></div>
        <script>
            var map = L
                .map('map')
                .setView([
                    -6.1941, 106.8301
                ], 5);
            L
                .tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                })
                .addTo(map);

            var loi = {
                "type": "FeatureCollection",
                "features": [
                    {
                        "type": "Feature",
                        "properties": {
                            "nama": "Gelora Bung Karno",
                            "kota": " DKI Jakarta"
                        },
                        "geometry": {
                            "coordinates": [
                                106.80267373909498, -6.2185144524597575
                            ],
                            "type": "Point"
                        }
                    }, {
                        "type": "Feature",
                        "properties": {
                            "nama": "Gelora Bandung Lautan Api",
                            "kota": " Bandung"
                        },
                        "geometry": {
                            "coordinates": [
                                107.71193980454001, -6.957617363655459
                            ],
                            "type": "Point"
                        },
                        "id": 1
                    }
                ]
            };
            var geojson = L
                .geoJSON(loi, {
                    onEachFeature: function (feature, layer) {
                        layer.bindPopup(feature.properties.nama + "," + feature.properties.kota);
                    }
                })
                .addTo(map);
        </script>
    </body>
</html>