<?php 
	include "../DATABASE/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        #add-student-container {
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>

<div id="add-student-container">
    <h2 class="text-center mb-4">Add Student</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form data
        $name = $_POST['name'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd']; // Hash the password

        

       

        // SQL query to insert data
        $sql = "INSERT INTO login (NAME, UID, PWD) VALUES ('$name', '$uid', '$pwd')";

        if ($connect->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Student added successfully!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error: ' . $connect->error . '</div>';
        }

       
    }
    ?>

    <form method="post" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="uid">ID:</label>
            <input type="text" class="form-control" name="uid" id="uid" required>
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" id="pwd" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Add Student</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

