<?php
include("Database.php");
 if (isset($_POST['trigger'])) {
    $deleteQuery = $db->query('delete from manufacturer where id ='.$_POST['manufacture-id'].'');
    if ($deleteQuery) {
        echo "Successfully deleted";
    }else {
       echo "Sorry, Not deleted";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trigger</title>
</head>
<body>
    <form action="" method="POST">
        <select name="manufacture-id" id="">
            <?php
            $dbQuery = $db->query('select * from manufacturer');
            while ($recordRow = $dbQuery->fetch_array()) {
                echo " <option value='$recordRow[0]'>$recordRow[1]</option>";
            }
            ?>
           
        </select>
        <input type="submit" value="Delete by Trigger" name="trigger">
        <table>
            <tr>
            <th>Product List</th>
        </tr>
            <?php
            $query = $db->query('select * from product');
            while ($pdResult = $query->fetch_array()) {
                echo "<tr><td>$pdResult[1]</td></tr>";
            }
            ?>
        </table>
    </form>
</body>
</html>