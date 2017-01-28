<html>
<body>
<link rel="stylesheet" type="text/css" href="Style.css" />

<?php

class Anime{  //Class Anime

    	private static $conn; // Variebles
	private $anime_id;
	private $anime_name;
	private $episodes;
	private $description;
	private $image;
	private $video;


    public static function setConnection($connection)
    {
   	Anime::$conn=$connection; //Connection
    }

    
    public static function searchAnime() //Search method to be called in the index.php page, then run these commands
    {
 	$conn=Anime::$conn; //Connect to Anime
	$search_term = $_GET['search']; //Get the search
	$Search = $conn->prepare("SELECT anime_id, anime_name FROM Anime WHERE anime_name LIKE :search_term ORDER BY anime_name ".$_GET['sort']);//Get the query then match if search term is like anime name
	$Search->bindValue(':search_term','%'.$search_term.'%');
	$Search->execute();
	return $Search;

}

    public static function detailAnime() //Detail method to be called in the detail.php page, then run these commands
    {
	$conn=Anime::$conn;
	$anime_id = $_GET['anime_id']; //Get the id of the data it will be displaying
	$query = "SELECT *,GROUP_CONCAT( DISTINCT c.actor_name SEPARATOR  ', ' ) AS Actors,
			GROUP_CONCAT( DISTINCT e.type SEPARATOR  ', ' ) AS Genre,
			GROUP_CONCAT( DISTINCT c.age SEPARATOR  ', ' ) AS Age
			FROM Anime a
			INNER JOIN Anime_actors b ON a.anime_id = b.anime_id
			INNER JOIN Actors c ON b.actors_id = c.actors_id
			INNER JOIN Anime_genre d ON a.anime_id = d.anime_id
			INNER JOIN Genre e ON d.genre_id = e.genre_id
			AND a.anime_id = :anime_id"; //Query including the inner joins to 5 different tables
	$Display = $conn->prepare($query);
	$Display->bindValue(':anime_id',$anime_id );
	$Display->execute();
	return $Display;

}

   public static function relateAnime()
   {
	$conn=Anime::$conn;
	$Query =$conn->prepare("SELECT anime_id, anime_name FROM Anime WHERE anime_id !=:currentAnimeID "); //Query including the inner joins
	$Query->bindValue(":currentAnimeID", $_GET['anime_id']);
	$Query->execute();
	$Relate=$Query->fetchAll();
	return $Relate;
	}
}
?>
</body>
</html>