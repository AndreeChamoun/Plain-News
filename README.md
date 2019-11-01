# **The Leek of the week**

My first PHP assignment at Yrgo.<br>
Inspired by The Onion articles.

<br>
<img src="https://steamuserimages-a.akamaihd.net/ugc/779613284193040286/F9C38546B5B658C5F381CCD5E62AC24472D5A6D2/" width="100%">

## Installation
1. Clone this repository with Github desktop. If you are going to do this in the terminal prompt  type in <br>" `git clone https://github.com/Tartaros1/Plain-News.git`
2. Start a localhost in the folder you have downloaded this project.
Type php -S localhost:(type any 4 digits in here)
3. Go to your browser and in the URL type in localhost:(the 4 digits)

## Built with:
- PHP
- JavaScript
- CSS
- HTML

## Testers
Bernhard Stedt<br>
Mark Dela Cruz

## Code review
Jakob Fridmar

1: Javascript/HTML: Todays date does not work (javascript). Not linked in index.php. Worked when linked.
   The date text is in white text and all other text is in black.
2: PHP: Feels a bit unnecessary to put every $article item from the foreach in a new variable.
   Also a bit inconsistent. $article[‘likecounter’] is not made into a new variable.
3: PHP: a bit inconsistent naming variables and such. Some names are with camel casing and some without. Some classname start with big letter and some with smal.
4: PHP:  Some weird shortening of word. Example: $authors[$article['authorId']]['authimage']; is but into a variable named $authorImage.
    Why is 'authimage' shortened only on the author name and not image. Like => authImg. And it the variable and classname is named the full authorImage. Just feels a bit confusing.
5: HTML/CSS: the like counter and thumbs up does not line up with each other.
6: HTML/CSS: the text goes outside of the text along with like counter,  creating some dead space.
7: HTML/CSS: The content in the end of the article are a bit messy. Author image, author name, like counter and the thumbs up.
8: HTML/CSS: Does not scale to mobile very well. Something weird is happening at @media only screen and (min-width: 770px) where the the content does not aline in the browser and sticks to the left side.
9: HTML/CSS: Repetition at style.css  9-18 .
10: HTML/CSS/PHP:  a bit unstructured and hard to easily understand. Would be good to  have some comments over the parts and structures in every document. So you easily can find the part you are looking for.
Good job André! I like how it shows todays date and updates using javascript. Cool idea!
Also good with the “cards” in the article area, makes it easy to separate the different articles.
