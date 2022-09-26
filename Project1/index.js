// const getRandomFruitsName = require("random-fruits-name");
// console.log(getRandomFruitsName("en"));

var nameToImdb = require("name-to-imdb");
nameToImdb("south park", function (err, res, inf) {
  console.log(res); // "tt0121955"
  // inf contains info on where we matched that name - e.g. metadata, or on imdb
  // and the meta object with all the available data
  console.log(inf);
});