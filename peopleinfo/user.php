<?php
include 'connection.php';
$firstname = "";
$lastname = "";
$age = "";
$address= "";

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
}
    $query = "INSERT INTO people (firstname,lastname,age,address) values('$firstname','$lastname','$age','$address')";
    $result = mysqli_query($con,$query);

    if ($result) {
        echo 'data save successfully';
    }else{
        die(mysqli_error($con));
    };
      
    //header("location:display.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Information</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5"><br><br><br>
        <form action="" method="post">
            <h3 class="text-align text-center">People's Information</h3>
            <div class="form-input">
            <label>firstname</label>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="firstname" autocomplete="off">
          </div><br>
          <div class="form-input">
            <label>lastname</label>
            <input type="text" class="form-control" placeholder="Enter your lastname" name="lastname" autocomplete="off">
          </div><br>
          <div class="form-input">
            <label>age</label>
            <input type="text" class="form-control" placeholder="Enter your age" name="age" autocomplete="off">
          </div><br>
          <div class="form-input">
            <label>address</label>
            <input type="text" class="form-control" placeholder="Enter your address" name="address" autocomplete="off">
          </div><br>

          <button type="submit" class="btn btn-light" name="submit">submit</button>
          <a href="display.php" class="btn btn-danger">Back</a>
        </form>
    </div>


</body>
</html>

