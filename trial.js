
var request = require('request');
var cheerio = require('cheerio');

var url = "http://wikipedia.org";

request(url, function (error, response, body) {
  if (!error) {
    var $ = cheerio.load(body)

    var title = $('a').text();
    var content = $('body').text();
    var freeArticles = $('.central-featured-lang.lang1 a small').text()

    console.log('URL: ' + url);
    console.log('Title: ' + title);
    console.log('EN articles: ' + freeArticles);
  }
  else {
    console.log("We’ve encountered an error: " + error);
  }
});
