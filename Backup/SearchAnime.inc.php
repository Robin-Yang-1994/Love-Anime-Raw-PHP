<?php

class Anime{   //Anime Class, include methods to for search and show details

    	private static $conn; //Variebles
	public $anime_id;
	public $anime_name;
	public $episodes;
	public $description;


    public static function setConnection($connection)  //Connection method
    {
   	Anime::$conn=$connection;
    }

    
    public static function search() //search method to be called in another file
    {
 	$conn=Anime::$conn; //Connection
	$search_term = $_GET['search'];  //Gets the search
	$results = $conn->prepare("SELECT *FROM Anime WHERE anime_name LIKE :search_term"); //Get query and match search term to anime_name
	$results->bindValue(':search_term','%'.$search_term.'%');  
	$results->execute();
	
   
    if(empty($_GET["search"])) //Echo this message if search was empty
    {
      echo "<p>Please enter keywords</p>";
    }
   else
    {
      function getDetails($Anime)  //Run the get details method
   {
        echo "<a href='detail.php?anime_id=".$Anime['anime_id']."'>";  //Get anime id
        echo "<p>".$Anime['anime_name']."</p><br>"; //Display anime name (in hyperlinks)
   }

	if ($results->rowCount()==0)  //If zero results found then echo this message
    {
	echo "<p>No results found<p>";
    }
    else
    {
	echo "<p2>".$results->rowCount()." "."Found</p2>"; //If not then echo this message
    }
    
        foreach($results as $Anime) //Loop to display information
    {
        getDetails($Anime); //To be called method
    }
}
}

	//public static function detail() //Details method
	{
	$conn=Anime::$conn;
	$anime_id = $_GET['anime_id'];
	$query = "SELECT *,actor_name, type 
	FROM Anime a
	INNER JOIN Anime_actors b ON a.anime_id = b.anime_id
	INNER JOIN Actors c ON b.actors_id = c.actors_id
	INNER JOIN Anime_genre d ON a.anime_id = d.anime_id
	INNER JOIN Genre e ON d.genre_id = e.genre_id
	AND a.anime_id = :anime_id";   //Inner join query to get access to all 5 tables
	$stmt = $conn->prepare($query);
	$stmt->bindValue(':anime_id',$anime_id );
	$stmt->execute();
    
    if($Anime=$stmt->fetch(PDO::FETCH_OBJ))
{
	echo '<img src="data:image/jpeg;base64,'.base64_encode($Anime->picture).'"/>';
	echo "<li>Anime name:".$Anime->anime_name."</li>";
	echo "<li>Genres:".$Anime->type."</li>";
	echo "<li>Epsiodes:".$Anime->episodes."</li>";
        echo "<li>Description:".$Anime->description."</li>";
	echo "<li>Release date:".$Anime->release_date."</li>";
	echo "<li>Voice actors:".$Anime->actor_name."</li>";
	echo "<li>Actors age:".$Anime->age."</li>";
	echo "<li>Actors DOB:".$Anime->dob."</li>";
	echo '<iframe width="640" height="480" src="//'.$Anime->video.'" frameborder="0" allowfullscreen></iframe>';
}

}
}
?>