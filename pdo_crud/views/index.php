<?php 

include 'C:\xampp\htdocs\pdo_crud\crud\user_crud.php';

$userCrud = new UserCrud();
$result = $userCrud->getAllUsers();

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <br>

    <a href="create.php" class="btn btn-primary">KULLANICI EKLE</a>
    <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">GÜNCELLE</th>
                    <th scope="col">SİL</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $item): ?>
                <tr>
                    <th><?php echo $item['id'] ?></th>
                    <td><?php echo $item['first_name'] ?></td>
                    <td><?php echo $item['last_name'] ?></td>
                    <td><?php echo $item['phone'] ?></td>
                    <td><?php echo $item['email'] ?></td>
                    <td><a class="btn btn-success" href="update.php?id=<?php echo $item['id']?>">GÜNCELLE</a></td>
                    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $item['id']?>">SİL</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>