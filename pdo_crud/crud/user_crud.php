<?php //25.09.2023

include 'C:\xampp\htdocs\pdo_crud\crud\connection.php';

class UserCrud{

    function getAllUsers(){ //index

        $connection = new Connection();
        $sql = "SELECT * FROM users";

        $q = $connection->connect()->prepare($sql); //Veritabanına bağlandı ve "prepare()" fonk. ile sorguyu hazırladı.
        $q->execute(); //Sorgumuzu çalıştırdık.
        return $q->fetchAll(PDO::FETCH_ASSOC); // Tablodaki kolon isimleriyle eşlemiş olarak gelmesini sağladık.
    }

    function getUser($id){ //show

        $connection = new Connection();
        $sql = "SELECT * FROM users WHERE `id`=:id";

        $q = $connection->connect()->prepare($sql);
        $q->execute(['id'=>$id]); 
        return $q->fetch(PDO::FETCH_ASSOC); 
    }


    function createUser($first_name,$last_name,$phone,$email){ //store

        $connection = new Connection();
        $sql = "INSERT INTO users (`first_name`,`last_name`,`phone`,`email`) VALUES(:first_name,:last_name,:phone,:email)";
        $q = $connection->connect()->prepare($sql);
        $q->execute([
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'phone'=>$phone,
                'email'=>$email]);
        return $q->rowCount();
    }

    function updateUser($id,$first_name,$last_name,$phone,$email){ //update
        $connection = new Connection();
        $sql = "UPDATE users SET first_name=:first_name,last_name=:last_name,phone=:phone,email=:email WHERE id=:id";
        $q = $connection->connect()->prepare($sql);
        $q-> execute([
            'id'=>$id,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'phone'=>$phone,
            'email'=>$email
        ]);

        return $q->rowCount();

    }

    function deleteUser($id){ //delete

        $connection = new Connection();
        $sql = "DELETE FROM users WHERE `id`=:id";

        $q = $connection->connect()->prepare($sql);
        $q->execute(['id'=>$id]);

        return $q->rowCount();
    }


}

?>