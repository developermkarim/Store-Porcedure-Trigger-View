<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="submit" value="Show View Table Data" name="view">
    </form>
    
    <?php
include("Database.php");
 if (isset($_POST['view'])) {
    $viewquery = $db->query('SELECT * FROM product_view_table');
    echo "<table>";
    echo  "<tr><th>ID</th><th>Name</th><th>Price</th></tr>";
    while ($viewRecords = $viewquery->fetch_array()) {
        echo "<tr>
        <td>$viewRecords[0]</td>
        <td>$viewRecords[1]</td>
        <td>$viewRecords[2]</td></tr>";
    }
    echo "</table>";
  }
?>
</body>
</html>