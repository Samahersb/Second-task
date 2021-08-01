
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robort";
$conn = new mysqli($servername, $username, $password, $dbname);
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $direction = $_POST['direction'];
  
  
    $sql = "INSERT INTO buttons (`direction`) VALUES ('$direction');";
    
    if (mysqli_query($conn, $sql)) {
      echo $direction;
    }
    
    }

      $conn->close();
      
?>