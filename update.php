<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `utilisateur` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$firstName=$row['firstName'];
$lastName=$row["lastName"];
$gender = $row["gender"];
$email = $row["email"];
$phone = $row["phone"];
$password=$row["password"];



if(isset($_POST['submit'])){
$FirstName=$_POST["firstName"];
$LastName=$_POST["lastName"];
$Gender = $_POST["gender"];
$email = $_POST["email"];
$phone = $_POST["number"];
$password=$_POST["password"];
$repass=$_POST["repass"];

if($password!=$repass)
{
  echo"Les mots de passe ne sont pas identiques";
}

else{
$sql="update `utilisateur` set id=$id, firstName='$FirstName',lastName='$LastName',gender='$Gender',email='$email',phone='$phone',password='$password' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
 header('location:display.php');
}
  else{
    die(mysqli_error($con));
  }

}
}
?>

<!doctype html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >

    <title>php project</title>
  </head>
  <body>

  <div class="container my-5  ">
  <form method="post" >
  <div class="form-group">
  <label for="firstName">First Name</label>
                <input type="text"
                  class="form-control"
                  id="firstName"
                  placeholder="enter your first name"
                  name="firstName"
                  required="required"
                  value=<?php echo $firstName;?>
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
                  value=<?php echo $lastName;?>
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
                  type="text"
                  class="form-control"
                  id="email"
                  placeholder="enter your email"
                  name="email"
                  required="required"
                  value=<?php echo $email;?>
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
                  value=<?php echo $password;?>
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
                  value=<?php echo $phone;?>
                />
              </div>
              <button type="submit" class="btn btn-primary" name="submit" > modifier </button>
            </form>
  </div>

  </body>
</html>
