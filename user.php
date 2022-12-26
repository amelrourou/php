<?php
include 'connect.php';
if(isset($_POST['submit'])){

$FirstName=$_POST["firstName"];
$LastName=$_POST["lastName"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["number"];
$password=$_POST["password"];
$repass=$_POST["repass"];

if($password!=$repass)
{
  echo"Les mots de passe ne sont pas identiques";
}

else{
$sql="insert into `utilisateur` (firstName,lastName,gender,email,phone,password) values('$FirstName','$LastName','$gender','$email','$phone','$password')";
$result=mysqli_query($con,$sql);
if($result){
 header('location:display.php');
}else{
    die(mysqli_error($con));  }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
    />
    <title>php project</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
        <div class="form-group">
          <label for="firstName">First Name</label>
          <input
            type="text"
            class="form-control"
            id="firstName"
            placeholder="enter your first name"
            name="firstName"
            required="required"
          />
        </div>
        <div class="form-group">
          <label for="lastName">Last Name</label>
          <input
            type="text"
            class="form-control"
            id="lastName"
            placeholder="enter your last name"
            name="lastName"
            required="required"
          />
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <div>
            <label for="male" class="radio-inline"
              ><input
                type="radio"
                name="gender"
                value="male"
                id="male"
                required
              />Male</label
            >
            <label for="female" class="radio-inline"
              ><input
                type="radio"
                name="gender"
                value="female"
                id="female"
              />Female</label
            >
            <label for="others" class="radio-inline"
              ><input
                type="radio"
                name="gender"
                value="other"
                id="others"
              />Others</label
            >
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="enter your email"
            name="email"
            required="required"
          />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            class="form-control"
            id="password"
            placeholder="enter your password"
            name="password"
            required="required"
          />
        </div>
        <div class="form-group">
          <label for="repass">Confirmer le mot de passe</label>
          <input
            type="password"
            class="form-control"
            id="repass"
            placeholder="confirm your password"
            name="repass"
            required="required"
          />
        </div>

        <div class="form-group">
          <label for="number">Phone Number</label>
          <input
            type="number"
            class="form-control"
            id="number"
            placeholder="enter your number"
            name="number"
          />
        </div>
        <input type="submit" class="btn btn-primary" name="submit" />
      </form>
    </div>
  </body>
</html>
