
var request = require('request');
var cheerio = require('cheerio');

var url = "http://wikipedia.org";

request(url, function (error, response, body) {
  if (!error) {
    var $ = cheerio.load(body)

  /*var arr= []; var k=0;
$(cheerio.load(body)).ready(function(){
    $('a').click(function(){
      arr[k]=document.getElementsByTagName('a');
      arr[k]=arr[k].value;
      k++;
        console.log(arr[0]);
    });
});*/

    var title = $('a').text();
    var content = $('span.data-jsl10n').text();
    var freeArticles = $('.central-featured-lang.lang1 a small').text()

    console.log('URL: ' + url);
    console.log('Title: ' + title);
    console.log('EN articles: ' + freeArticles);
  }
  else {
    console.log("We’ve encountered an error: " + error);
  }
});
