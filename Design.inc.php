<?php

class Design{

private static $conn;

 public static function setConnection($connection)
    {
   	Design::$conn=$connection;
    }

public static function tableAnime ()
{
    $conn=Design::$conn;
    $query = $conn->prepare("SELECT * FROM Anime");//Calling this specific query from the database
    $query->execute();
    $Animes=$query->fetchAll();//Fetch the result from the query
    return $Animes;
}

public static function tableActor()
{
    $conn=Design::$conn;
    $query = $conn->prepare("SELECT * FROM Actors");//Calling this specific query from the database
    $query->execute();
    $Actor=$query->fetchAll();//Fetch the result from the query
    return $Actor;
}

public static function tableGenre()
{
    $conn=Design::$conn;
    $query = $conn->prepare("SELECT * FROM Genre");//Calling this specific query from the database
    $query->execute();
    $Genres=$query->fetchAll();//Fetch the result from the query
    return $Genres;
}

public static function tableAnimeActors()
{
    $conn=Design::$conn;
    $query = $conn->prepare("SELECT * FROM Anime_actors");//Calling this specific query from the database
    $query->execute();
    $JTable1=$query->fetchAll();//Fetch the result from the query
    return $JTable1;
}

public static function tableAnimeGenre()
{
    $conn=Design::$conn;
    $query = $conn->prepare("SELECT * FROM Anime_genre ORDER BY `anime_id`");//Calling this specific query from the database
    $query->execute();
    $JTable2=$query->fetchAll();//Fetch the result from the query
    return $JTable2;
}
}
?>
