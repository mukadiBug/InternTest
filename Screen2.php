
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Screen 2</title>
  </head>
  <body>
    
    <h1>Take Our Survey</h1>
    <br>
    <form action="/interntest.php">
    <br>
    <center><button class="btn btn-primary btn-lg"> Back</button></center>
</form>
    <label>Personal Details:</label>
<form action="/Screen2.php" method="POST" enctype="multipart/form-data" accept-charset="UTF-8">
  <label   for="Sname" >Surname:</label>
  <input type="text" id="sname" name = "Sname" size="50"><br><br>
 <label for="fname">First Names</label>
  <input type="text" id="fname" name="fname"  size="50"><br><br>
  <label for="Cnum">Contact Number</label>
  <input type="text" id="Cnum" name="Cnum"  size="50"><br><br>
  <label>Date</label>
  <input type="date" name="date" placeholder="select date" > <br><br>
  <label for="Age">Age</label>
  <input type="text" id="Age" name="Age" maxlength="3" minValue="5" size="3"><br><br>
  <br>
  <br>
  <label>What is your favorite food?(You can Choose More Than 1 answer)</label>
  <br>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Pizza" id="PizzaCheck1" name="Food[]">
  <label class="form-check-label" for="PizzaCheck1">
    Pizza
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Pasta" id="PastaCheck1" name="Food[]">
  <label class="form-check-label" for="PastaCheck1">
    Pasta
  </label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Pap and Wors " id="PWCheck1" name="Food[]">
  <label class="form-check-label" for="PWCheck1">
    Pap and Wors
  </label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Chicken Stir Fry" id="ChickCheck1" name="Food[]">
  <label class="form-check-label" for="ChickCheck1">
    Chicken Stir Fry
  </label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Beef Stir Fry" id="BeefCheck1" name="Food[]">
  <label class="form-check-label" for="BeefCheck1">
    Beef Stir Fry
  </label>
</div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Other" id="OtherCheck1" name="Food[]">
  <label class="form-check-label" for="OtherCheck1">
    Other
  </label>
</div>
  <br>
  <br>
  <label>On a scale of 1 to 5 indicate wheter you strongly agree to strongly disagree</label>
  <br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col"></th>
      <th scope="col"> <center>Strongly Agree</center> <br> <center>(1)</center> </th>
      <th scope="col"><center>Agree</center> <br> <center>(2)</center> </th>
      <th scope="col"><center>Neutral</center> <br> <center>(3)</center></th>
      <th scope="col"><center> Disagree</center> <br> <center>(4)</center></th>
      <th scope="col"><center>Strongly disagree</center> <br> <center>(5)</center> </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <center> I Like to Eat Out </center> </th>
      <td><center> <input type="radio" id="Strongly Agree" name="choose" value="1"></center>
</td>
      <td><center><input type="radio" id="Agree" name="choose" value="2"></center> </td>
      <td><center><input type="radio" id="Neutral" name="choose" value="3"></center></td>
      <td><center><input type="radio" id="Disagree" name="choose"  value="4"></center></td>
      <td><center><input type="radio" id="Strongly Disagree" name="choose"  value="5"></center></td>
    </tr>
    <tr>
      <th scope="row"> <center> I Like to Watch Movies </center></th>
          <td><center> <input type="radio" id="Strongly Agree" name="choose2" value="1"></center>
</td>
      <td><center><input type="radio" id="Agree2" name="choose2" value="2"></center> </td>
      <td><center><input type="radio" id="Neutral2" name="choose2" value="3"></center></td>
      <td><center><input type="radio" id="Disagree2" name="choose2"  value="4"></center></td>
      <td><center><input type="radio" id="Strongly Disagree2" name="choose2"  value="5"></center></td>
    </tr>
    <tr>
      <th scope="row"> <center> I Like to watch TV</center></th>
      <td><center> <input type="radio" id="Strongly Agree3" name="choose3" value="1"></center>
</td>
      <td><center><input type="radio" id="Agree3" name="choose3" value="2"></center> </td>
      <td><center><input type="radio" id="Neutral3" name="choose3" value="3"></center></td>
      <td><center><input type="radio" id="Disagree3" name="choose3"  value="4"></center></td>
      <td><center><input type="radio" id="Strongly Disagree3" name="choose3"  value="5"></center></td>
    </tr>
    <th scope="row"> <center> I like to listen to the Radio </center> </th>
       <td><center> <input type="radio" id="Strongly Agree" name="choose4" value="1"></center>
</td>
      <td><center><input type="radio" id="Agree4" name="choose4" value="2"></center> </td>
      <td><center><input type="radio" id="Neutral4" name="choose4" value="3"></center></td>
      <td><center><input type="radio" id="Disagree4" name="choose4"  value="4"></center></td>
      <td><center><input type="radio" id="Strongly Disagree4" name="choose4"  value="5"></center></td>
    </tr>
  </tbody>
</table>

  <br><br><center><input class="btn btn-primary btn-lg" type="submit" value="submit" name="submit"></center>
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "interntest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$submit = ($_POST['submit']);

if (isset($submit)) {
    

$Surname = ($_POST['Sname']);
$fname = ($_POST['fname']);
$Cnum = ($_POST['Cnum']);
$date = ($_POST['date']);
$Age = ($_POST['Age']);
$Food= ($_POST['Food']);
$SinFood = implode(',',$Food);
$choose = ($_POST['choose']);
$choose2 = ($_POST['choose2']);
$choose3 = ($_POST['choose3']);
$choose4 = ($_POST['choose4']);


$sql = "INSERT INTO surveydb (Surname, fname, Contact, date, Age, Food, choose, choose2, choose3, choose4)
VALUES ('$Surname', '$fname', '$Cnum', '$date', '$Age', '$SinFood', '$choose', '$choose2','$choose3', '$choose4')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();

?>

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
