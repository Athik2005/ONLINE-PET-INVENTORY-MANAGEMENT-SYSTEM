<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_inventory";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pets";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Pets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f8f9fa;
        }

        nav {
            text-align: center;
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ccc;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #d1ecf1;
        }

        .actions a {
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
        }

        .edit {
            background-color: #28a745; /* Green for edit */
        }

        .delete {
            background-color: #dc3545; /* Red for delete */
        }

        .actions a:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
     <nav class="navbar navbar-expand-lg bg-dark text-white">
            <div class="navbar-brand"><h5>Pet Paradise</h5></div>
             <ul class="navbar-nav" style="position:absolute;right:10px;">
                <li class="nav-item"><a href="index.html" class="nav-link text-decoration-none text-white">Home</a></li>
                <li class="nav-item"><a href="add_pet_form.html" class="nav-link text-decoration-none text-white">Add Product</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-decoration-none text-white">About Us</a></li>
                <li class="nav-item"> <a href="#" class="nav-link text-decoration-none text-white">Contact Us</a></li>
             </ul>
           </div>
        </nav>
    <h1>Current Products in your Cart</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Species</th>
            <th>Age</th>
            <th>Product Name</th>
            <th>Product Type</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['species']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['product_type']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td class="actions">
                        <a href="edit_pet.php?id=<?php echo $row['id']; ?>" class="edit">Edit</a>
                        <a href="delete_pet.php?id=<?php echo $row['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this pet?');">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="9">No pets found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
