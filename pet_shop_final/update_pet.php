<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $id=$_POST['id'];
   $name=$_POST['name'];
   $species=$_POST['species'];
   $age= $_POST['age'];
   $pdname=$_POST['Product_name'];
   $pdtype=$_POST['Product_type'];
   $price=$_POST['price'];
   $description=$_POST['description'];
   $stmt ="UPDATE pets SET name ='$name' WHERE id =$id";
   $conn->query($stmt);
   $stmt ="UPDATE pets SET species ='$species' WHERE id =$id";
   $conn->query($stmt);
   $stmt ="UPDATE pets SET age =$age WHERE id =$id";
   $conn->query($stmt);
   $stmt ="UPDATE pets SET product_name ='$pdname' WHERE id =$id";
   $conn->query($stmt);
   $stmt ="UPDATE pets SET product_type ='$pdtype' WHERE id =$id";
   $conn->query($stmt);
   $stmt ="UPDATE pets SET price =$price WHERE id =$id";
   $conn->query($stmt);
   $stmt ="UPDATE pets SET description ='$description' WHERE id =$id";
   $conn->query($stmt);
    //$stmt->bind_param($_POST['name'], $_POST['species'], $_POST['age'], $_POST['Product_name'],$_POST['Product_type'],$_POST['price'],$_POST['description'], $_POST['id']);
    //$stmt->execute();
    //$stmt->close();
}

$conn->close();
header("Location: show_pets2.php");
exit();
?>
