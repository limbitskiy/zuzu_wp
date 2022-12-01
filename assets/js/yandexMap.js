const init = () => {
  const myMap = new ymaps.Map(
    "map",
    {
      center: [55.748858, 37.760153],
      zoom: 16,
      controls: ["smallMapDefaultSet"],
    },
    {
      searchControlProvider: "yandex#search",
    }
  );

  myGeoObject = new ymaps.GeoObject(
    {
      geometry: {
        type: "Point",
        coordinates: [55.748858, 37.760153],
      },
      properties: {
        iconContent: "Плеханова 10а",
      },
    },
    {
      preset: "islands#redStretchyIcon",
    }
  );

  myMap.geoObjects.add(myGeoObject);
};

ymaps.ready(init);
