<html>
<head>	
<title>Tables Page</title> 
<link rel="stylesheet" type="text/css" href="Style.css" /> <!-- Connected to Style sheet -->
</head>
<body>
    
    <div class="img"/>  <!--Background image-->
    <div class="designtext">Class diagram</div>
    <img src="Class diagram.JPG" id="classdiagram"/>
    <style type="text/css">
    img   /*Used to display images from the database here because this style is too common in the style sheet*/
    {
          height: 150px;
          width: auto;
    }
    </style>
    
<?php
require_once("Design.inc.php");  //Requiring this file
require_once("Connect.inc.php");    //Requiring this file
$conn=ConnectionProject::connect();
?>

<?php //Anime
Design::setConnection(ConnectionProject::connect()); //Get connection to the database
$Animes=Design::tableAnime();  //Call method from design class

    echo '<table width="1800"><caption>Anime</caption>';
    echo '<tr><th>anime_id</th><th>anime_name</th><th>epsiodes</th><th>description</th><th>release_date</th><th>anime_picture</th><th>anime_video</th><tr>'; //Open table make headers
   
    foreach ($Animes as $Anime) //Loop to display all the data until the last one

    {
	echo "<tr>";
	echo "<td>".$Anime['anime_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Anime['anime_name']."</td>";
	echo "<td>".$Anime['episodes']."</td>";
	echo "<td>".$Anime['description']."</td>";
	echo "<td>".$Anime['release_date']."</td>";
	echo '<td><img src="data:image/jpg;base64,'.base64_encode($Anime ['anime_picture']).'"/td>';
	echo "<td>".$Anime['anime_video']."</td>";
	echo "</tr>";    
    } 						
    echo "</table>"; //Close table
?>    

<br>  
</br>

<?php  //Actors
Design::setConnection(ConnectionProject::connect());//Get connection to the database
$Actor=Design::tableActor();//Call method from design class

    echo '<table width="1000"><caption>Actors</caption>';
    echo "<tr><th>actors_id</th><th>actor_name</th><th>age</th></tr>"; //Open table make headers
   
    foreach ($Actor as $Actors) //Loop to display all the data until the last one
    {
	echo "<tr>";
	echo "<td>".$Actors['actors_id']."</td>";
	echo "<td>".$Actors['actor_name']."</td>";
	echo "<td>".$Actors['age']."</td>"; //Display the information selected from the database
	echo "</tr>";
    } 
    echo "</table>"; //Close table
?>    

<br>  
</br>

<?php  //Genre
Design::setConnection(ConnectionProject::connect());//Get connection to the database
$Genres=Design::tableGenre();    //Call method from design class

    echo '<table width="400"><caption>Genre</caption>';
    echo "<tr><th>genre_id</th><th>type</th></tr>"; //Open table make headers
   
    foreach ($Genres as $Genre) //Loop to display all the data until the last one
    {
	echo "<tr>";
	echo "<td>".$Genre['genre_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Genre['type']."</td>";
	echo "</tr>";
    }
    echo "</table>"; //Close table
?>    

<br>  
</br>
    
<?php //Anime Actor
Design::setConnection(ConnectionProject::connect());//Get connection to the database
$JTable1=Design::tableAnimeActors();//Call method from design class

    echo '<table width="400"><caption>Anime_actors</caption>';
    echo "<tr><th>anime_id</th><th>actors_id</th></tr>"; //Open table and make 2 header 
   
   foreach ($JTable1 as $Anime_actors) //Loop to display all the data until the end
    {
	echo "<tr>";
	echo "<td>".$Anime_actors['anime_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Anime_actors['actors_id']."</td>";
	echo "</tr>";
    } 
    echo "</table>"; //Close table
?>

<br> 
</br>
    
<?php  //Anime Genre
Design::setConnection(ConnectionProject::connect());//Get connection to the database
$JTable2=Design::tableAnimeGenre();//Call method from design class

    echo '<table width="400"><caption>Anime_genre</caption>';
    echo "<tr><th>anime_id</th><th>genre_id</th></tr>"; //Open table and make 2 header 
   
    foreach ($JTable2 as $Anime_genre) //Loop to display all the data until the end

    {
	echo "<tr>";
	echo "<td>".$Anime_genre['anime_id']."</td>"; //Display the information selected from the database
	echo "<td>".$Anime_genre['genre_id']."</td>";
	echo "</tr>";
    }
    echo "</table>"; //Close table
?>
</table>
</body>
</html>
