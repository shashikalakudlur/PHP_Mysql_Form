<!DOCTYPE html>
<html>
<head>
  <title>Upload your files</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="col-lg-5 m-auto" style="padding:50px;">
  <form enctype="multipart/form-data" action="upload.php" method="POST">
  <div class="card-header bg-danger">
    <p>Upload your file</p>

    <input type="file" name="uploaded_file"></input><br />
    <input class="btn btn-success" type="submit" value="Upload"></input>
  </form>
  </div>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
      echo "<img src="">
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>