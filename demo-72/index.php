<?php
$pagetitle = 'All Website';
 include 'header.php';

?>

<body>
    <div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-4 d-flex justify-content-center">
      <?php
      $sql="select * from `user`";
      $result=mysqli_query($db,$sql);
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];
          $name=$row['name'];
          $url=$row['url'];
          $label=$row['label'];
          $img=$row['img'];
          echo '
          <div class="m-3">
          <div class="col">
          <div class="card" style="width: 18rem;">
              <img src="'.$img.'" style="height: 70px; width:auto;" class="card-img-top" alt="">
              <div class="card-body">
              <span class="badge bg-dark">in <a href="#" class="text-light">'.$label.'</a></span>
                  <h5 class="card-title mb-4">'.$name.'</h5>
                  <p class="card-text" id="p2">'.$url.'</p>
                  <div class="d-flex justify-content-center">
                  <div class="w-50"><div class="pe-2">
                  <a href="'.$url.'" target="_blank" class="w-100 btn btn-primary">Go Site <i class="ms-1 bi bi-box-arrow-up-right"></i></a>
                  </div></div>
                  <div class="w-50"><div class="">
                  <a class="text-light" href="update.php?updateid='.$id.'"><button class="w-100 btn btn-Warning">Update<i class="ms-1 bi bi-pencil-square"></i></button></a>
                  </div></div>
                  </div>
                  <a class="text-light" href="delete.php?deleteidl='.$id.'"><button class="btn btn-outline-danger w-100 mt-2">Delete<i class="ms-1 bi bi-trash"></i></button></a>
              </div>
              <div class="card-footer">
              <p>Sl NO: '.$id.'</p>
              </div>
          </div>
      </div>
      </div>
          ';

      } 
        ?>
    </div>
    </div>


</body>
</html>