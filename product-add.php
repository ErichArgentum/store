<?php
$host = 'tak18hobe.itmajakas.ee';
$db   = 'd83227_store';
$user = 'd83227_store';
$pass = 'SteamGuardEnable1';
$charset = 'utf8mb4';

//create connection
$connection = mysqli_connect($host, $user, $pass, $db);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Product List</title>
</head>
<body>  
   
    
</div>
<h1>Product List</h1>

<form action="add" method="POST">
    @csrf<br>
    <input type="text" name="ProductSKU" placeholder="Product SKU"> <br> <br>
    <input type="text" name="ProductPrice" placeholder="Product Price"> <br> <br>
    <input type="text" name="ProductSize" placeholder="Product Size"> <br> <br>
    <label for="switch">Type Switch:</label>

<select name="switch" id="switch">
  <option value="DVD">DVD</option>
  <option value="Book">Book</option>
  <option value="Furniture">Furniture</option>
</select>
<button type="submit">Save</button>
<button type="reset">Cancel</button>
</form>





</body>
</html>