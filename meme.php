<?php
 include 'header.php';
?>

<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#">
<head>
	<title>Hmm465's Site</title>
</head>
<head>
	<link rel="stylesheet" type="text/css" href="/AllCSS.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>

<meta property="og:title" content="Hmm465's site" />
<meta property="og:type" content="website" />
<meta property="og:url" content="/meme.php" />
<meta property="og:image" content="/favico.ico" />
<meta property="og:description" content="the meme page" />
<meta property="og:locale" content="en_US" />
</head>
<body>

<center>
<h1> random meme of undefined amount of time: </h1> <br>

<h3> if you see nothing, the image probably failed to load, just refresh until you see one. </h3> <br>

<script>

var imagesArray = ["https://raw.githubusercontent.com/DontStalkMebro/Hmm465.is-great.net/master/images/IMG_0911.png", "https://raw.githubusercontent.com/DontStalkMebro/Hmm465.is-great.net/master/images/WhatTheActual.png", "https://raw.githubusercontent.com/DontStalkMebro/Hmm465.is-great.net/master/images/free.jpg", "https://raw.githubusercontent.com/DontStalkMebro/Hmm465.is-great.net/master/images/mafia.png", "https://raw.githubusercontent.com/DontStalkMebro/Hmm465.is-great.net/master/images/mafia2.png"];


//create a function named displayImage
//it should not have any values passed into it

    //the first statement should generate a random number in the range 0 to 6 (the subscript values of the image file names in the imagesArray)
    var num = Math.floor(Math.random() * 6); // 0...5?
    console.log("image number" + num);
    //the second statement display the random image from the imagesArray array in the canvas image using the random number as the subscript value
    document.write('<center> <img src="'+imagesArray[num]+'" align="center" style="align-center"/> </center>');
    console.log("created image.");
</script>

<br>
</center>
</div>
</body>
</html>