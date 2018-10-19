const view = new ol.View({
  center: [152972.09101592476, 5408442.966628075],
  zoom: 17,
})

const backgroundLayer = new ol.layer.Tile({
  source: new ol.source.OSM()
})

const poiLayer = new ol.layer.Vector({
  source: new ol.source.Vector({
    features: []
  }),
  style (feature, resolution) {
    if (feature.get('picto')) {
      return new ol.style.Style({
        image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
          anchor: [0.5, 46],
          anchorXUnits: 'fraction',
          anchorYUnits: 'pixels',
          opacity: 0.75,
          src: feature.get('picto')
        }))
      })
    }
    return new ol.style.Style({
      image: new ol.style.Circle({
        radius: 10,
        fill: new ol.style.Fill({
          color: '#ff751a'
        }),
        stroke: new ol.style.Stroke({
          color: '#fff',
          width: 2
        })
      })
    })
  }
})

const map = new ol.Map({
  target: 'map',
  view,
  layers: [backgroundLayer, poiLayer]
})

function refreshMap (idCategory) {
  let mapFeatures = idCategory
    ? features.features.filter(item => item.properties.categorie == idCategory)
    : features.features

  const olFeatures = (new ol.format.GeoJSON()).readFeatures({
    type: 'FeatureCollection',
    features: mapFeatures.map(item => ({
      ...item,
      geometry: {
        ...item.geometry,
        coordinates: [+item.geometry.coordinates[0], +item.geometry.coordinates[1]]
      }
    })),
  }, {
    dataProjection: 'EPSG:4326',
    featureProjection: 'EPSG:3857'
  })

  poiLayer.getSource().clear()
  poiLayer.getSource().addFeatures(olFeatures)
}