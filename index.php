<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <?php 
          // echo $file;
          ?>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
       <button><a href="/file-upload-download/downloads.php">Download File</a></button> 
        </form>
      </div>
    </div>
  </body>
</html>