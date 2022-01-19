<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql= "insert into crud(name,email,mobile,password)
    values('$name','$email','$mobile','$password')" ;

    $result= mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }else{
    die(mysqli_error($con));
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
      <div class="container my-5" >
      <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email"  placeholder="Enter email" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" name="mobile" placeholder="Enter mobile" autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password"  placeholder="Enter password" autocomplete="off">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
      </div>
  </body>
</html>