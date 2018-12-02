# Detection-of-Malicious-Web-Pages
The main aim behind this project is to detect malicious web pages. Most of the attackers inject  a malicious URL in the starting page of a website since it is the starting page that hosts users to EKs via redirects. What attackers most commonly do is that they implant a malicious anchor tag (<a>)
•	First we are crawling the web by using a starting URL of a page and thereby extracting all URLs and links present on that page with the <a>  tag and href attribute. 
•	We are securely storing all the extracted URLs into a database . 
•	Next we are judging each URL from there based on 3 parameters namely length of the URL, frequency of occurrence of characters in the URL and third we are testing the URLs against a training set with malicious keywords being read from a file.
Overall the scores from all the 3 parameters are taken on an average to determine whether an URL should be blacklisted or not based on the score.
