<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $stmt = $conn->prepare("SELECT * FROM pets WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $pet = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .image-preview {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .image-preview img {
            width: 150px;
            height: auto;
            margin: 0 10px;
            border: 2px solid #ccc;
            border-radius: 4px;
        }

        .content {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark text-white">
            <div class="navbar-brand"><h5>Pet Paradise</h5></div>
             <ul class="navbar-nav" style="position:absolute;right:10px;">
                <li class="nav-item"><a href="index.html" class="nav-link text-decoration-none text-white">Home</a></li>
                <li class="nav-item"><a href="add_pet_form.html" class="nav-link text-decoration-none text-info">Add Product</a></li>
                <li class="nav-item"><a href="delete_pet.php" class="nav-link text-decoration-none text-white">Delete Product</a></li>
                <li class="nav-item"> <a href="edit_pet.php" class="nav-link text-decoration-none text-white">Edit Product</a></li>
             </ul>
           </div>
        </nav>
    <h1>Edit Product</h1>
    <form action="update_pet.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $pet['id']; ?>"><br><br>
        <input type="text" name="name" placeholder="Pet Name" value="<?php echo $pet['name']; ?>" required><br><br>
        <input type="text" name="species" placeholder="Species" value="<?php echo $pet['species']; ?>" required><br><br>
        <input type="number" name="age" placeholder="Age" value="<?php echo $pet['age']; ?>" required><br><br>
        <input type="text" name="Product_name" placeholder="product_name" value="<?php echo $pet['product_name'];?>" required><br><br>
        <input type="text" name="Product_type" placeholder="product_type" value="<?php echo $pet['product_type'];?>" required><br><br>
        <input type="number" name="price" placeholder="price" value="<?php echo $pet['price']; ?>" required><br>
        <textarea name="description" placeholder="Description"><?php echo $pet['description']; ?></textarea>
        <button type="submit">Update Pet</button>
    </form>
</body>
</html>
