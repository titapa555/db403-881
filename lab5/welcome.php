<?php
session_start();
include 'db_connect.php';
$sql = "select * from registration where email='{$_SESSION['email']}'"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    try {
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc()) {
?>
    <p>fname : <?= $row['fname'] ?></p>
    <p>lname : <?= $row['lname'] ?></p>
    <p>gender : <?= $row['gender'] ?></p>
    <p>dob : <?= $row['dob'] ?></p>
    <p>email : <?= $row['email'] ?></p>
    <p>password : <?= $row['passw'] ?></p>
<?php
    }
    else {
        echo 'User not found.';
    }
}
catch(Exception $e) {
        echo "Error: $sql<br>{$e->getMessage()}";
      }
      $conn->close();
    ?>
    
</body>
</html>