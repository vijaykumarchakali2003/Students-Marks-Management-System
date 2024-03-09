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
    

    <form method="post" action="process_sem_page.php" class="row">
	<div class="col-6">
        <div class="form-group py-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Student Name" required>
        </div>

        <div class="form-group py-3">
            <input type="text" class="form-control" name="id" id="id" placeholder="Student ID" required>
        </div>

        <div class="form-group py-3">
            <select class="form-control" name="subject" id="subject" required placeholder="Subject">
                <option value="telugu">Telugu</option>
                <option value="english">English</option>
                <option value="it">IT</option>
                <option value="maths">Maths</option>
                <option value="physics">Physics</option>
                <option value="chemistry">Chemistry</option>
            </select>
        </div>

        <div class="form-group py-3">
            <input type="text" class="form-control" name="mid1" id="mid1" placeholder="MID-1 Marks" required>
        </div>

        <div class="form-group py-3">
            <input type="text" class="form-control" name="mid2" id="mid2" placeholder="MID-2 Marks" required>
        </div>
	</div>
	<div class="col-6">

		<div class="form-group py-3">
		    <input type="text" class="form-control" name="bom" id="bom" placeholder="BOM" required>
		</div>

		<div class="form-group py-3">
		    <input type="text" class="form-control" name="external" id="external" placeholder="External" required>
		</div>

		<div class="form-group py-3">
		    <input type="text" class="form-control" name="total" id="total" placeholder="Total" required>
		</div>

		<div class="form-group py-3">
		    <input type="text" class="form-control" name="grade" id="grade" placeholder="Grade" required>
		</div>
	</div>
	<div class="row">
        <button type="submit" class="btn btn-primary" style="margin-left:500px; padding-left:100px;padding-right:100px">Submit</button>
	</div>
    </form>

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2

