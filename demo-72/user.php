<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $ph=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO `user`(name,email,mobile,password) VALUES ('$name','$email','$ph','$password')";
    $result=mysqli_query($db,$sql);
    if($result){
        ?><script>window.location.href='index.php'</script><?php
    }
    else{
        die(mysqli_error($db));
    }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<title>TEST 3</title>
<body>
    <div class="container mt-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="name" Name="name" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Email" Name="email" autocomplete="off"">
  </div>
  <div class="mb-3">
    <label>mobile</label>
    <input type="text" class="form-control" placeholder="mobile" Name="mobile" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>password</label>
    <input type="password" class="form-control" placeholder="password" Name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>