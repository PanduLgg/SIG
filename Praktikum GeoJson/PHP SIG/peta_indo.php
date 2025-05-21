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
                            "nama": "Kampus B STT Nurul Fikri",
                            "kota": "Jakarta Selatan"
                        },
                        "geometry": {
                            "coordinates": [
                                106.83266418648572, -6.352886976250801
                            ],
                            "type": "Point"
                        }
                    }, {
                        "type": "Feature",
                        "properties": {
                            "nama": "Kampus A STT Nurul Fikri",
                            "kota": " Kota Depok"
                        },
                        "geometry": {
                            "coordinates": [
                                106.84420234781823, -6.362714102610056
                            ],
                            "type": "Point"
                        }
                    }, {
                        "type": "Feature",
                        "properties": {
                            "nama": "Kampus Universitas Indonesia",
                            "kota": " Kota Depok"
                        },
                        "geometry": {
                            "coordinates": [
                                106.82904195113389, -6.364453945951652
                            ],
                            "type": "Point"
                        }
                    }, {
                        "type": "Feature",
                        "properties": {
                            "nama": "Kampus Universitas Pancasila",
                            "kota": " Jakarta Selatan"
                        },
                        "geometry": {
                            "coordinates": [
                                106.83308570065986, -6.339227325077616
                            ],
                            "type": "Point"
                        }
                    }, {
                        "type": "Feature",
                        "properties": {
                            "nama": "Kampus E Gunadarma",
                            "kota": " Kota Depok"
                        },
                        "geometry": {
                            "coordinates": [
                                106.84151541670269, -6.354193544277578
                            ],
                            "type": "Point"
                        }
                    }, {
                        "type": "Feature",
                        "properties": {
                            "nama": "Kampus Politeknik Media Kreatif",
                            "kota": " Jakarta Selatan"
                        },
                        "geometry": {
                            "coordinates": [
                                106.82736563209244, -6.346772281974751
                            ],
                            "type": "Point"
                        }
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