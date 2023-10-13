<?php
include 'C:\xampp\htdocs\pdo_crud\crud\user_crud.php';

$id=$_GET["id"];

$userCrud = new UserCrud();
$item=$userCrud->getUser($id);

if(isset($_POST["onayla"])){
    $userCrud->deleteUser($id);


    header("location:index.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1><?php echo $item['first_name']." ".$item['last_name'] ?> silinsin mi?</h1>
    <br>
    <form action="" method="POST">

    <a class="btn btn-warning "href="index.php ?>">VAZGEÇ</a>
    <button type="submit" name="onayla" class="btn btn-danger">ONAYLA</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>