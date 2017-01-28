 <?php
class ConnectionProject{  //Connection class to get to database
    private static $conn;
    public static function connect() //Method
    {
        if(!ConnectionProject::$conn)
        {
            try{
                ConnectionProject::$conn = new PDO('mysql:host=localhost;dbname=u1352883', 'u1352883', '09dec94');  //Try connectioning to this databse, using PDO
             }
             catch (PDOException $exception) //Catch the error
             {
                echo "Oh no, there was a problem" . $exception->getMessage(); //Display message if not connected
             }
        }
        return ConnectionProject::$conn;
    }
}

?>