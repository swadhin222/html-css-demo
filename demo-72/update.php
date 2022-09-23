<?php
$pagetitle = 'Update | All Web Site';
ob_start();
include 'connect.php';
include 'header.php';



function inputFields($placeholder,$name,$value,$type){
  $ele="
  <div class=\"form-group\">
         <input class=\"form-control m-2\" type='$type' name='$name' placeholder='$placeholder' value='$value' autocomplete=\"off\" required>
     </div>
  ";
 echo $ele;
}
$id=$_GET['updateid'];
$sql="select * from `user` where id=$id";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$url=$row['url'];
$label=$row['label'];
$img=$row['img'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $url=$_POST['url'];
    $label=$_POST['label'];
    $img=$_POST['img'];
    //$file = $_FILES["img"]['name'];
    //$fileseparate=explode('.',$file);
    //$fileex=strtolower(end($fileseparate));
    //$filetmp_name=$file['tmp_name'];
    //$extension=array('jpeg','jpg','png');


    //if(in_array($fileex,$extension)){
    //$upload_image='upload/'.$filename;
    //move_uploaded_file($filetmp_name,$upload_image);
    $sql="update `user` set id='$id',name='$name',url='$url',label='$label',img='$img' where id='$id'";
    $result=mysqli_query($db,$sql);
    if($result){
      echo '<div class="m-5 alert alert-success d-flex align-items-center shadow-sm p-3 mb-5 rounded" role="alert"><i class="bi bi-check-circle me-2"></i>Data Submited!<div>';
      header('Refresh: 1; URL=index.php');
    }
    else{
        die(mysqli_error($db));
    }
//}
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
    <div class="container mt-5">
    <form method="post">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="name" Name="name" value="<?php echo $name ?>" autocomplete="off">
  </div>
  <div class="mb-3">
    <label>URL</label>
    <input type="url" class="form-control" placeholder="url" Name="url" value="<?php echo $url ?>" autocomplete="off"">
  </div>
  <div class="mb-3">
    <label>Label</label>
    <input type="text" class="form-control" placeholder="label" Name="label" value="<?php echo $label ?>" autocomplete="off">
  </div>
    <div class="mb-3">
    <label>IMG URL</label>
    <input type="img" class="form-control" placeholder="IMG URL" Name="img" value="<?php echo $img ?>" autocomplete="off"">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>