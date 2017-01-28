<html>  
<head>
<title>Search</title>
   <link rel="stylesheet" type="text/css" href="Style.css" />  <!--Include link to the Style.css file to get access to the css -->
</head>
<body>
    
   <a href="index.php"/><img src="Anime.jpg" id="logo"/></a> <!--Logo image-->
   
   <a href="http://kissanime.com/"><img src="kissanime.jpg" id="ks"/></a>  <!--Image of kiss anime -->
   <a href="http://en.wikipedia.org/wiki/Anime"><img src="wiki.png" id="wik"/></a>  <!--Image of wikipedia-->
   
   <img src="Images backup/ggo.jpg" id="g1"/>   <!--Images used in my index page (Hidden)-->
   <img src="Images backup/misaka.jpg" id="g2"/>
   <img src="Images backup/dxd.jpg" id="g3"/>
   <img src="Images backup/beat.jpg" id="g4"/>
   <img src="Images backup/stratos.jpg" id="g5"/>
   <img src="Images backup/ngnl.jpg" id="g6"/>
   <img src="Images backup/dbz.jpg" id="g7"/>
   <img src="Images backup/bb.jpg" id="g8"/>
   
   <a href="http://selene.hud.ac.uk/u1352883/Assignment/design.php"><div class="clickdesign">Click to View Design Page</div></a> <!--Link to design page-->
   
   <div class="supporttext">Website supported by:</div>  <!--Text-->
   
   <div class="hiddentext">Look For The Hidden Images</div> <!--Text-->
   
   <a href="http://selene.hud.ac.uk/u1352883/Assignment/detail.php"><div class="clickdetail">Click to View Details Page</div></a> <!--Link to details page-->
   

    <div class="search">  
        <form>
            <form action="index.php" method="POST">  <!--Opens up the index page-->
            <input type="text" name="search" id="searchbox" placeholder="Enter Anime or Genre"/>   <!--Creating search box, giving it a name and a placeholder-->
            <input type="submit"id="Searchbtn" value="Search"/>   <!--Creating search button-->
	    
      <select name="sort" id="sort">
	<option value="ASC">ASC</option>
	<option value="DESC">DESC</option>
      </select>
        </form>    
    </div>

<?php
require_once("AnimeClass.inc.php");    	//Connection to a php page
require_once("Connect.inc.php");	//Connection to a php page
$conn=ConnectionProject::connect();	//Connected with PDO via ConnectionProject class

?>
    
 <?php
   if(isset($_GET['search']))   //Get the value the users had typed in
   {  
      Anime::setConnection(ConnectionProject::connect()); //Connect to Anime class
      $Search=Anime::searchAnime();  //Call the search method from the Anime class
      
        if(empty($_GET["search"])) //If nothing is entered, display this message
    {
      echo "<p>Please enter keywords</p>";
    }
   else
    {
      
      function getDetails($Anime) //Calling the getdetails method from the foreach loop
   {
        echo "<a href='detail.php?anime_id=".$Anime['anime_id']."'>";
        echo "<p>".$Anime['anime_name']."</p><br>"; //Echo name of the anime
   }

	if ($Search->rowCount()==0) //If search is zero display the message below
    {
	echo "<p>No results found<p>";
    }
    else //OR
    {
	echo "<p2>".$Search->rowCount()." "."Found</p2>"; //Display how many found
    }
    
        foreach($Search as $Anime) //Foreach loop to loop out the data from the database
    {
        getDetails($Anime); //Method
    }
}
   }
?>
</body>               
</html>