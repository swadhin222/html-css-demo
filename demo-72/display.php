<?php
 include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display all Data</title>

</head>
<body>
    <div class="container mt-5">
        <button class="btn btn-primary"><a href="user.php" class="text-light">Add user</a></button>

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">SL No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from `user`";
$result=mysqli_query($db,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td><button class="btn btn-primary me-2"><a class="text-light " href="update.php?updateid='.$id.'">Update</a></button><button class="btn btn-danger"><a class="text-light" href="delete.php?deleteidl='.$id.'">Delete</a></button></td>
    </tr>';
    }
}

?>
  </tbody>
</table>
</div>
</body>
</html>