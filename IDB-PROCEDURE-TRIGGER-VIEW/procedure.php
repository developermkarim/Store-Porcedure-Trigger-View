<?php
    include("Database.php");
     if (isset($_POST['procedure'])) {
        $q = "call manufact_procedure('".$_POST['name']."','".$_POST['address']."','".$_POST['contact']."')";
       $result = $db->query($q);
        if (isset($result)) {
            echo "Manufacturer Created!!";
         }else{
            echo "manufacture not created";
         }
      
}
    ?>
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
<input type="text" name="name" placeholder="Name"><br>
<input type="text" name="address" placeholder="Address"><br>
<input type="text" name="contact" placeholder="Contact"><br>
    <input type="submit" value="Send To Procedure" name="procedure">
    </form>
    
</body>
</html>