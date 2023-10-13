<?php
include 'C:\xampp\htdocs\pdo_crud\crud\user_crud.php';

$id = $_GET["id"];

$userCrud = new UserCrud();
$item=$userCrud->getUser($id);

if (isset($_POST['updateSubmit'])){


    $name = $_POST['first_name'];
    $surname = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $q=$userCrud->updateUser($id,$name, $surname, $phone, $email);
    header("location:index.php");

}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="first_name" class="form-label">KULLANICI ADI</label>
                <input type="text" class="form-control" name="first_name" value="<?php echo $item['first_name']?>">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">KULLANICI SOYADI</label>
                <input type="text" class="form-control" name="last_name" value="<?php echo $item['last_name']?>">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">TELEFON NO</label>
                <input type="text" class="form-control" name="phone" value="<?php echo $item['phone']?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">EMAİL</label>
                <input type="email" class="form-control" name="email" value="<?php echo $item['email']?>">
            </div>
            <button type="submit" class="btn btn-primary" name="updateSubmit">KAYDET</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>