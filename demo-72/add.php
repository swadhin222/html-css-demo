<?php
 $pagetitle = 'Add New';
 include 'header.php';
 
 function inputFields($placeholder,$name,$value,$type){
     $ele="
     <div class=\"form-group\">
            <input class=\"form-control m-2\" type='$type' name='$name' placeholder='$placeholder' value='$value' autocomplete=\"off\" required>
        </div>
     ";
    echo $ele;
 }
?>
<body>
<h1 class="text-center">Submit Data</h1>
<div class="container mt-3 d-flex justify-content-center">

<form action="display1.php" method="post" enctype="multipart/form-data">
        <?php echo inputFields("Name","name","","text"); ?>
        <?php echo inputFields("URL","url","","url"); ?>
        <?php echo inputFields("Label","label","","text"); ?>
        <?php echo inputFields("IMG URL","img","","url"); ?>
        <button class="form-control btn btn-dark" type="submit" name="submit">Submit</button>
</form>
</div>
</body>