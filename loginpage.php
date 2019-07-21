<?PHP

session_start();
$connection = mysqli_connect('localhost','root', '', 'project1');
if (isset($_POST['login_user'])) {
$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);
$query = "SELECT * FROM users WHERE emailaddress='$email' AND password='$password'";

$results = mysqli_query($connection, $query);
if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";
      header('location: project1.php');
}else {
      header("location:loginpage.php");
      echo "not login";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron">
<h2 align="center">Login Page</h2>
 </div>
<div class="container">
<div class="col-md-6 col-md-offset-3">
<form class="" action="loginpage.php" method="post">
<div class="form-group">
<label for="email">Email</label>
<input type="text" name="email" class="form-control" placeholder="Type Your Email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" name="password" class="form-control" id="password" placeholder="Type Your Password">
</div>
<button type="submit" name="login_user" class="btn btn-primary">Login</button>
</form>
<p>Not Registered? <a href="projectform.php" class="btn btn-default">Register Here</a> </p>
</div>
</div>
</body>
</html>
