<html>
<body>
<title>Details Page</title>
<link rel="stylesheet" type="text/css" href="Style.css" /> <!--Styles-->
<div id="container">

<h1>Details Page</h1>

<a href="http://selene.hud.ac.uk/u1352883/Assignment/design.php"><div class="detailclick1">Click to View Design Page</div></a>

<a href="http://selene.hud.ac.uk/u1352883/Assignment/index.php"><div class="detailclick2">Click to View Index Page</div></a>

    <style type="text/css">
    img   /*Used to display images from the database here because this style is too common in the style sheet*/
    {
	margin-left: 630px;
    }
    </style>

<?php

require_once("Connect.inc.php"); /*Connecting to this file*/
require_once("AnimeClass.inc.php");	/*Connecting to this file*/
$conn=ConnectionProject::connect();

if(!isset($_GET['anime_id']))
{
	echo "You shouldn't have got to this page";
	exit;
}

Anime::setConnection(ConnectionProject::connect()); //Connection
$Display=Anime::detailAnime(); //Call details method from Anime class

	foreach($Display as $Animes)
	{
	echo '<img src="data:image/jpeg;base64,'.base64_encode($Animes['anime_picture']).'"/>'; //Display picture of Anime
	echo "<li>Title:".$Animes['anime_name']."</li><br>"; //Name
	echo "<li>Genres:".$Animes['Genre']."</li><br>"; //Genre
	echo "<li>Epsiodes:".$Animes['episodes']."</li><br>";  //Amount of episodes
        echo "<li>Description:".$Animes['description']."</li><br>";  //Short description
	echo "<li>Release date:".$Animes['release_date']."</li><br>";  //Release of Anime
	echo "<li>Voice actors:".$Animes['Actors']."</li><br>";  //Voice actors in the Anime
	echo "<li>Actors DOB:".$Animes['Age']."</li><br>";  //Voice actors in the Anime
	echo '<iframe width="640" height="480" src="//'.$Animes['anime_video'].'" frameborder="0" allowfullscreen></iframe><br>'; //Display video
	echo "<b>Other animes you may be interested:</b><br>";
	}

$Relate=Anime::relateAnime(); //Call details method from Anime class

	foreach($Relate as $Animes)
	{
	echo "<li><a href='detail.php?anime_id=".$Animes['anime_id']."'>Title:".$Animes['anime_name']."</li>"; // Displays different hyperlinks to show user different animes
	}

?>
</body>
</html>