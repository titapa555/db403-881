<?php
    include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <?php
$sql = "SELECT * FROM products where CategoryID=1";
    $result = $conn->query($sql);
    ?>
<div class="container" boder='1'>
<table>
  <thead>
    <tr>
      <td width="25%">productname</td>
      <td width="25%">Units in stock</td>
    </tr>
    </thead>
<?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?php echo $row['ProductName']; ?></td>
      <td><?php echo $row['UnitsInStock']; ?></td>
    </tr>
<?php endwhile ?>
    </tbody>
  </table>
</body>
</html>