<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS count FROM surveydb";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    $output =$row['count'];
    echo "Total number of surveys: ".$output;
}

$sql4 = "SELECT AVG(Age) AS Average FROM surveydb";
$result4 = mysqli_query($conn, $sql4);

while($row4 = mysqli_fetch_assoc($result4)){
    $output4 =$row4['Average'];
    echo "<br>Average Age is : ".$output4;
}


$sql2 = "SELECT MAX(Age) AS Age FROM surveydb";
$result2 = mysqli_query($conn, $sql2);

while($row2 = mysqli_fetch_assoc($result2)){
    $output2 = $row2['Age'];
    echo "<br>Oldest person who participated in survey: ".$output2;
}

$sql3 = "SELECT MIN(Age) AS Age1 FROM surveydb";
$result3 = mysqli_query($conn, $sql3);

while($row3 = mysqli_fetch_assoc($result3)){
    $output3 = $row3['Age1'];
    echo "<br>Youngest person who participated in survey".$output3;
}



$sql6 = "SELECT COUNT(*) AS count6 FROM surveydb WHERE Food = 'Pizza'";
$result6 = mysqli_query($conn, $sql6);

while($row6 = mysqli_fetch_assoc($result6)){
    $output6 =$row6['count6'];
    $FoodScore = ($output6/$output) * 100;
    echo "<br>Percentage of people who like Pizza: ".$FoodScore;
}

$sql7 = "SELECT COUNT(*) AS count7 FROM surveydb WHERE Food = 'Pasta'";
$result7 = mysqli_query($conn, $sql7);

while($row7 = mysqli_fetch_assoc($result7)){
    $output7 =$row7['count7'];
    $FoodScore2 = $output7 * 100;
    echo "<br>Percentage of people who like Pasta: ".$FoodScore2;
}

$sql8 = "SELECT COUNT(*) AS count8 FROM surveydb WHERE Food = 'Pap and Wors'";
$result8 = mysqli_query($conn, $sql8);

while($row8 = mysqli_fetch_assoc($result8)){
    $output8 =$row8['count8'];
    $FoodScore3 = ($output8/$output) * 100;
    echo "<br>Percentage of people who like Pap and Wors: ".$FoodScore3;
}

$sql9 = "SELECT AVG(choose) AS choice FROM surveydb";
$result9 = mysqli_query($conn, $sql9);

while($row9 = mysqli_fetch_assoc($result9)){
    $output9 =$row9['choice'];
    echo "<br>Average amount of people who like to eat out : ".round($output9,1);
}

$sql10 = "SELECT AVG(choose2) AS choice2 FROM surveydb";
$result10 = mysqli_query($conn, $sql10);

while($row10 = mysqli_fetch_assoc($result10)){
    $output10 =$row10['choice2'];
    echo "<br>Average amount of people who like to watch movies:  ".round($output10,1);
}

$sql11 = "SELECT AVG(choose3) AS choice3 FROM surveydb";
$result11 = mysqli_query($conn, $sql11);

while($row11 = mysqli_fetch_assoc($result11)){
    $output11 =$row11['choice3'];
    echo "<br>Average amount of people who like to watch TV:  ".round($output11,1);
}

$sql12 = "SELECT AVG(choose4) AS choice4 FROM surveydb";
$result12 = mysqli_query($conn, $sql12);

while($row12 = mysqli_fetch_assoc($result12)){
    $output12 =$row12['choice4'];
    echo "<br>Average amount of people like to listen to the radio:  ".round($output12,1);
}


$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Screen 3</title>
  </head>
  <body>
    <form action="/interntest.php">
    <br>
    <center><button class="btn btn-primary btn-lg">Ok</button></center>
</form>>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>