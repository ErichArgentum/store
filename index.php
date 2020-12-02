<?php
$servername = 'tak18hobe.itmajakas.ee';
$dbname  = 'd83227_store';
$username = 'd83227_store';
$password = 'SteamGuardEnable1';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT ProductSKU, ProductPrice, ProductType, ProductSize,ProductID FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$row["ProductID"];
$row["ProductPrice"];
$row["ProductSKU"];
$row["ProductType"];
$row["ProductSize"];

    }
} else {
    echo "0 results";
}

 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <div class="card"> 

    <div class="container"> 
   

         <h3><? echo $row['ProductSKU']?> </h3>
         <h3><?=$row['ProductPrice']?> $ </h3>
         <h3><?=$row['ProductType']?>  </h3>
         <h3> Size:<?=$row['ProductSize']?> MB</h3>
    </div>


</div>

</head>
<body>


</div>
</body>
</html>