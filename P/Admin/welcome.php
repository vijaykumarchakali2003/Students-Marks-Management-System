<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Examcell - R.K.Valley</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
       
       #heading {
            /*position: fixed;*/
            top: 0;
            left: 0;
            right: 0;
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        #sidebar {
            background-color: #333;
            color: #fff;
            height: 90vh;
            padding-top: 10px; /* Adjust based on the height of your fixed navigation bar */
        }

        #sidebar a {
            color: #fff;
            padding: 10px;
            display: block;
            text-decoration: none;
        }

        #sidebar a:hover {
            background-color: #555;
        }

        #logout {
            background-color: #d9534f; /* Red color for danger */
            color: #fff;
        }
    </style>
</head>
<body style="background-color: rgba(132, 143, 190,1)">

<div id="heading" class="d-flex align-items-center justify-content-center" style="background-color: rgb(110, 124, 187);">
    <h2>EXAMCELL - R.K.Valley</h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2" id="sidebar" style="background-color: rgba(132, 123, 190,1)">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="welcome.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dropdown.php">Mid Marks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dropdown.php">Sem Marks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_student.php">Add Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger" id="logout" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>

        <div class="col-md-10 text-center align-items-center" style="height:90vh;display:flex;align-items:center;justify-content:center;">
            <!-- Content for the welcome page -->
            <h1>Welcome to Examcell - R.K.Valley</h1>
            <!-- Add more content here -->
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

