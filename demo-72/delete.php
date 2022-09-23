<?php
include 'connect.php';
if(isset($_GET['deleteidl'])){
    $id=$_GET['deleteidl'];

    $sql="delete from `user` where id=$id";
    $result=mysqli_query($db,$sql);
    if($result){
        ?><script>window.location.href='index.php'</script><?php
    }
        else{
            die(mysqli_error($db));
        }
    }
    ?>