<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

session_start();
include "../DATABASE/connection.php";
$puc = $_SESSION["puc"];
$semester = $_SESSION["semester"];
$examType = $_SESSION["examType"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch and sanitize input data
    
    $studentName =$_POST["studentName"];
    $studentId = $_POST["studentId"];
    $telugu = $_POST["telugu"];
    $english = $_POST["english"];
    $it = $_POST["it"];
    $maths = $_POST["maths"];
    $physics = $_POST["physics"];
    $chemistry = $_POST["chemistry"];

    // Determine the table based on the selected options
	if($puc == "P1" && $semester == "S1" && $examType == "MID1")
{
	$tableName = "PUC1S1MID1";
}
else{
    $tableName = $puc . $semester . $examType;
}

    // Insert data into the respective database table
    $sql = "INSERT INTO $tableName (NAME, ID, telugu, english, it, maths, physics, chemistry)
            VALUES ('$studentName', '$studentId', '$telugu', '$english', '$it', '$maths', '$physics', '$chemistry')";

    if ($connect->query($sql) === TRUE) {
        echo "Data added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mid Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body style="background-color: rgba(132, 143, 190,1)">

<div class="container">
    <!--<h2 style="background-color: rgb(110, 124, 187);">Mid Page</h2>-->

    <!--<p>Received Data:</p>
    <ul>
        <li><strong>PUC:</strong> <?php echo $puc; ?></li>
        <li><strong>Semester:</strong> <?php echo $semester; ?></li>
        <li><strong>Exam Type:</strong> <?php echo $examType; ?></li>
    </ul>-->

    <form method="post" action="" class="row">
	<div class="col">
		<div class="form-group py-3" >
		    <input type="text" class="form-control" name="studentName" placeholder="Student Name" required>
		</div>

		<div class="form-group py-3">
		    <input type="text" class="form-control" name="studentId" placeholder="Student ID" required>
		</div>

		<div class="form-group py-3">
		    <input type="number" class="form-control" name="telugu" placeholder="Telugu" required>
		</div>

		<div class="form-group py-3">
		    <input type="number" class="form-control" name="english"  placeholder="English" required>
		</div>
	</div>
	<div class="col">
        <div class="form-group  py-3">
            <input type="number" class="form-control" name="it" placeholder="IT" required>
        </div>
	
        <div class="form-group  py-3">
            <input type="number" class="form-control" name="maths" placeholder="Maths" required>
        </div>

        <div class="form-group  py-3">
            <input type="number" class="form-control" name="physics" placeholder="Physics" required>
        </div>

        <div class="form-group  py-3">
            <input type="number" class="form-control" name="chemistry" placeholder="Chemistry" required>
        </div>
	</div>
	</div class="row">
        <button type="submit" class="btn btn-primary w-50" style="margin-left:250px">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2

