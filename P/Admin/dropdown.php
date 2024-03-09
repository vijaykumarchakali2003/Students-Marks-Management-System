<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
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
    <h2 class="text-center py-5	">ExamCell R.K.Valley</h2>

    <form method="post" action="" style="display:flex;justify-content:space-around;">
        <!-- Other form fields -->

        <div class="form-group" style="width:20%;height:50px;">
            
            <select class="form-control" name="puc" required>
                <option value="P1">PUC 1</option>
                <option value="P2">PUC 2</option>
            </select>
        </div>

        <div class="form-group" style="width:20%;height:50px;">
            
            <select class="form-control" name="semester" required>
                <option value="S1">Semester 1</option>
                <option value="S2">Semester 2</option>
            </select>
        </div>

        <div class="form-group" style="width:20%;height:50px;">
            
            <select class="form-control" name="examType" required>
                <option value="MID1" name="examType">Mid 1</option>
                <option value="MID2" name="examType">Mid 2</option>
                <option value="sem" name="examType">Semester Exam</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" style="width:20%;height:40px;">Submit</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<?php
session_start();

	$_SESSION['puc'] = $_POST['puc'];
	$_SESSION['semester']= $_POST['semester'];
	$_SESSION['examType'] = $_POST['examType'];

	

	if($_SESSION['examType'] == "MID1" || $_SESSION['examType'] == "MID2")
	{
		header("Location: mid_page.php");
	}
	elseif($_SESSION['examType'] == "sem")
	{
		header("Location: sem_page.php");
	} 

?>
</body>
</html>

