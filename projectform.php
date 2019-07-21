
<?PHP
if(isset($_POST['submit'])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $emailaddress = $_POST['emailaddress'];
  $age = $_POST['age'];
  $location = $_POST['location'];
  $date = $_POST['date'];

$connection = mysqli_connect('localhost','root', '', 'project1');
if($connection){
  echo "we are connected";
}
else{
  die("connection failed");
}
$query = "INSERT INTO users (firstname,lastname, password,emailaddress,age,location,date)
VALUES ('$firstname','$lastname', '$password','$emailaddress','$age','$location','$date')";
echo "$query";
$result = mysqli_query($connection, $query);
if(!$result){
  die('query failed' .mysqli_connect_error());
}
header("location:project1.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create database</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <h1 align = "center">Enter Users Data</h1>
    <div class="container">
    <div class="col-xs-6">
    <form action="projectform.php" method="POST">
   <div class="form-group">
    First Name:<input type="text" name="firstname" class="form-control"><br>
  </div>
      <div  class="form-group">
    Last Name: <input type="text" name="lastname" class="form-control"><br></div>
    <div  class="form-group">
  Password: <input type="password" name="password" class="form-control"><br></div>
      <div  class="form-group">
    Email address: <input type="email" name="emailaddress" class="form-control"><br></div>
      <div  class="form-group">
    Age: <input type="number" name="age" class="form-control"><br></div>
      <div  class="form-group">
    Location:<input type="text" name="location" class="form-control"><br></div>
      <div  class="form-group">
    Date:<input type="text" name="date" class="form-control"><br></div>
      <div  class="form-group">
<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
    </form>
</div>
</body>
</html>
