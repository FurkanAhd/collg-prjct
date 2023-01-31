  <?php

session_start();

$mysqli =new mysqli("localhost", "root", "1234","blog");

if($mysqli == false)
{
    die("COULD NOT CONNECT TO DATABASE" .mysqli_connect_error());
}

?>  
