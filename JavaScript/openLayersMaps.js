// var map = new ol.Map({
//     target: 'map',
//     layers: [
//         new ol.layer.Tile({
//             source: new ol.source.OSM()
//         })
//     ],
//     view: new ol.View({
//         center: ol.proj.fromLonLat([-6.75, 34.02]),
//         zoom: 12
//     })
// });

// Vector Layers
// const bureauVoteGeoJSON = new ol.layer.VectorImage({
//     source: new ol.source.VectorSource({
//         url: './Data/map.geojson',
//         format: new ol.format.GeoJSON()
//     }),
//     visible: true,
//     title: 'bureauVoteGeoJSON'
// })
// map.addLayer(bureauVoteGeoJSON);

// import GeoJSON from 'ol/format/GeoJSON';
// import Map from 'ol/Map';
// import VectorLayer from 'ol/layer/Vector';
// import VectorSource from 'ol/source/Vector';
// import View from 'ol/View';

// new Map({
//     target: 'map-container',
//     layers: [
//         new VectorLayer({
//             source: new VectorSource({
//                 format: new GeoJSON(),
//                 url: './data/map.geojson',
//             }),
//         }),
//     ],
//     view: new View({
//         center: [0, 0],
//         zoom: 2,
//     }),
// });


window.onload = init;

function init() {
    const map = new ol.Map({
        view: new ol.View({
            center: [-753170.7228054795, 4000690.2997318255],
            zoom: 7
        }),
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        target: 'map'
    })
    map.on('click', function (e) {
        console.log(e);
    })
    // Vector Layers
    const fillStyle = new ol.style.Fill({
        color: [84, 118, 255, 1]
    })
    const strokeStyle = new ol.style.Stroke({
        color: [46, 45, 45, 1],
        width: 1.2
    })
    const circleStyle = new ol.style.Circle({
        fill: new ol.style.Fill({
            color: [245, 49, 5, 1]
        }),
        radius: 7,
        stroke: strokeStyle
    })
    const bureauVoteGeoJSON = new ol.layer.VectorImage({
        source: new ol.source.Vector({
            url: './Data/map.geojson',
            format: new ol.format.GeoJSON()
        }),
        visible: true,
        title: 'bureauVoteGeoJSON',
        style: new ol.style.Style({
            fill: fillStyle,
            stroke: strokeStyle,
            image: circleStyle
        })
    })
    map.addLayer(bureauVoteGeoJSON);
}

