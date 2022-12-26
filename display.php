<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilisateur liste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >

</head>
<body>
    <div class="container">
    <table class="table table-striped my-5">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="Select * from `utilisateur`";
$result=mysqli_query($con,$sql);
if($result){
    while ($row=mysqli_fetch_assoc($result)){
      $id=$row["id"];
      $firstName=$row['firstName'];
      $LastName=$row["lastName"];
      $gender = $row["gender"];
      $email = $row["email"];
      $phone = $row["phone"];
      $password=$row["password"];
     
      echo'
      <tr>
       <th scope="col">'.$id.'</th>
        <td>'.$firstName.'</td>
        <td>'.$LastName.'</td>
        <td>'.$gender.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary" ><a href="update.php?updateid='.$id.' "  class="text-light" >modifier</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid=' .$id. '" class="text-light" >supprimer</a></button>
     </td>
      </tr>';
    }
  }
?>
</tbody>
</table>
<div align='right'>
<button class="btn btn-primary" ><a href="user.php" class="text-light">ajouer utilisateur </a>
    </button>
    </div>
</div>
</body>
</html>
