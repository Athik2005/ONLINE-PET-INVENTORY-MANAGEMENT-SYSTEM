<?php
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "pet_inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // $stmt = $conn->prepare("INSERT INTO pets (name, species, age, product_name, product_type, price, description) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
   //$stmt->bind_param("ssis",$_POST['name'], $_POST['species'], $_POST['age'], $_POST['Product_name'],$_POST['Product_type'],$_POST['price'],$_POST['description']);
    //$stmt->execute();
    //$stmt->close();
   $name=$_POST['name'];
   $species=$_POST['species'];
   $age= $_POST['age'];
   $pdname=$_POST['Product_name'];
   $pdtype=$_POST['Product_type'];
   $price=$_POST['price'];
   $description=$_POST['description'];
   $stmt ="INSERT INTO pets (name, species, age, product_name, product_type, price, description) VALUES ('$name','$species', $age, '$pdname', '$pdtype', $price, '$description')";
   $result=$conn->query($stmt);
}

$conn->close();
header("Location: show_pets2.php");
exit();
?>
