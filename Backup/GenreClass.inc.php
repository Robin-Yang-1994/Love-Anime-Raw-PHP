<html>
<body>
<link rel="stylesheet" type="text/css" href="Style.css" />

<?php

class Genre{  //Class Anime

    	private static $conn; 
	private $genre_id;
	private $type;

    public static function setConnection($connection)
    {
   	Genre::$conn=$connection;
    }

    
    public static function searchGenre() //Search method to be called in the index.php page, then run these commands
    {
 	$conn=Genre::$conn; //Connect to Anime
	$search_term = $_GET['search']; //Get the search
	$stmt = $conn->prepare("SELECT *FROM Genre WHERE type LIKE :search_term");//Get the query then match if search term is like anime name
	$stmt->bindValue(':search_term','%'.$search_term.'%');
	$stmt->execute();
	return $stmt;

}


 public static function detailGenre() //Detail method to be called in the detail.php page, then run these commands
    {
	$conn=Genre::$conn;
	$anime_id = $_GET['type']; //Get the id of the data it will be displaying
	$query = "SELECT *FROM Genre WHERE type=:type"; //Query including the inner joins to 5 different tables
	$stmt = $conn->prepare($query);
	$stmt->bindValue(':type',$type);
	$stmt->execute();
	return $stmt;

}
}
?>
</body>
</html>

