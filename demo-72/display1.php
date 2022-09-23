<?php
$pagetitle="Display";
include 'connect.php';
include 'header.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = "";
    $mobile = "";
    $url = $_POST['url'];
    $label = $_POST['label'];
    $img = $_POST['img'];
                    

    //print input Name
    //echo $name;
    //echo "<br>";

    //print input url
    //echo $url;
    //echo "<br>";

    //print input url
    //echo $label;
    //echo "<br>";

    //print input file
    //print_r($file);
    //echo "<br>";
    
    //print input filename
    //$filename=$file['name'];
    //print_r("Image File Name is: ".$filename);
    ///echo "<br>";

    //print input filetype
    //$filetype=$file['type'];
   // print_r("Image File type is: ".$filetype);
    //echo "<br>";

    //print input filetmp_name
    //$filetmp_name=$file['tmp_name'];
   // print_r("Image File tmp loction is: ".$filetmp_name);
    //echo "<br>";

    //print input fileerror
    //$fileerror=$file['error'];
    //print_r("Image File error is: ".$fileerror);
    //echo "<br>";

    //print input filesize
    //$filesize=$file['size'];
    //print_r("Image File size is: ".$filesize);
    //echo "<br>";

    //print input fileseparate
    //$fileseparate=explode('.',$filename);
    //print_r($fileseparate);
    //echo "<br>";

    //print input fileseparate extr. method 1
    //$fileex=strtolower(end($fileseparate));
    //print_r($fileex);
    //echo "<br>";

    //print input fileseparate extr. method 2
    //$fileex1=strtolower($fileseparate[1]);
    //print_r($fileex1);
    //echo "<br>";

    //print input fileseparate only name method 1
    //$filenm1=strtolower($fileseparate[0]);
    //print_r($filenm1);
    //echo "<br>";
    
    //print input fileseparate Name method 2
    //$filenm=strtolower(prev($fileseparate));
    //print_r($filenm);
    //echo "<br>";

    //$extension=array('jpeg','jpg','png');
    if(1==1){
        //$upload_image='upload/'.$filename;
        //move_uploaded_file($filetmp_name,$upload_image);
        $sql="insert into `user` (name,email,mobile,password,url,label,img,file) values('$name','$email','$mobile','password','$url','$label','$img','file')";
        $result=mysqli_query($db,$sql);
        if($result){
            echo '<div class="m-5 alert alert-success d-flex align-items-center shadow-sm p-3 mb-5 rounded" role="alert"><i class="bi bi-check-circle me-2"></i>Data Submited!<div>';
            header('Refresh: 1; URL=index.php');
        }
        else{
            die(mysqli_error($db));
        }
    }
    else{
        echo '<div class="m-5 alert alert-warning" role="alert"><i class="me-2 bi bi-exclamation-triangle pe-2"></i>only allow file extension: jpeg,png,jpg</div> <div class="d-flex justify-content-center"><a class="me-2" href="add.php"><button class="btn btn-dark"><i class="me-2 bi bi-plus-square-dotted"></i>Goto Add New</button></a><a href="index.php"><button class="btn btn-outline-primary"><i class="me-2 bi bi-house"></i>Goto Home</button></a>';
    }

}


?>