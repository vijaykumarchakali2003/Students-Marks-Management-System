<?php

	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(E_ALL);
			
	session_start();

	$_SESSION['uid'];

	include '../DATABASE/connection.php';
	
	$query = "SELECT * FROM login WHERE UID='R180514'";
	$check = mysqli_query($connect,$query);
	$result = mysqli_fetch_assoc($check);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-crackle">

	<script src='../js/welcome.js' type="text/javascript"></script>

	<link rel="stylesheet" href="../css/welcome.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<script>

    function logout(){
        if(confirm("Are you sure ?")){
		window.location="../Before_Login/login.php";
	    session_destroy();
            
        }
        else{
            window.location="welcome1.php";
        }
    }
	function bg(){
		var x = document.getElementById("aa")
	}

</script>
	
<script>
	$(document).ready(function(){
		$("#x").hide();
		$("#now").click(function(){
			$("#x").show();
		});
	});
</script>

	<script>
		$(document).ready(function(){

/* USED TO INTIALLY HIDE ALL CONTENTS */

/* TO HIDE PUC-1-SEM-1 DETAILS */

$("#p1s1m1").hide();
$("#p1s1m2").hide();
$("#p1s1s").hide();

/* TO HIDE PUC-1-SEM-2 DETAILS */

$("#p1s2m1").hide();
$("#p1s2m2").hide();
$("#p1s2s").hide();


/* TO HIDE PUC-2-SEM-1 DETAILS */

$("#p2s1m1").hide();
$("#p2s1m2").hide();
$("#p2s1s").hide();

/* TO HIDE PUC-2-SEM-2 DETAILS */

$("#p2s2m1").hide();
$("#p2s2m2").hide();
$("#p2s2s").hide();

/*TO SHOW THE DETAILS ONE-BY-ONE */

// TO SHOW THE PUC-1-SEM-1 DETAILS

$("#p1s1-m1-b").click(function(){
	$("#p1s1m1").show();
	$("#welcome,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();
	$("#p2s1m1,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();//TO HIDE PUC-2 DETAILS
  });
  $("#p1s1-m2-b").click(function(){
	$("#p1s1m2").show();
	$("#p1s1m1,#welcome,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();
	$("#p2s1m1,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();//TO HIDE PUC-2 DETAILS
  });
  $("#p1s1-s-b").click(function(){
	$("#p1s1s").show();
	$("#p1s1m1,#welcome,#p1s1m2,#p1s2m1,#p1s2m2,#p1s2s").hide();
	$("#p2s1m1,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();//TO HIDE PUC-2 DETAILS
  });

// TO SHOW THE PUC-1-SEM-2 DETAILS

  $("#p1s2-m1-b").click(function(){
	$("#p1s2m1").show();
	$("#welcome,#p1s2m2,#p1s2s,#p1s1m1,#p1s1m2,#p1s1s").hide();
	$("#p2s1m1,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();//TO HIDE PUC-2 DETAILS
  });
  $("#p1s2-m2-b").click(function(){
	$("#p1s2m2").show();
	$("#p1s2m1,#welcome,#p1s2s,#p1s1m1,#p1s1m2,#p1s1s").hide();
	$("#p2s1m1,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();//TO HIDE PUC-2 DETAILS
  });
  $("#p1s2-s-b").click(function(){
	$("#p1s2s").show();
	$("#p1s2m1,#welcome,#p1s2m2,#p1s1m1,#p1s1m2,#p1s1s").hide();
	$("#p2s1m1,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();//TO HIDE PUC-2 DETAILS
  });

  // TO SHOW THE PUC-2-SEM-1 DETAILS

  $("#p2s1-m1-b").click(function(){
	$("#p2s1m1").show();
	$("#welcome,#p2s1m2,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();
	$("#p1s1m1,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();//TO HIDE PUC-1 DETAILS
  });
  $("#p2s1-m2-b").click(function(){
	$("#p2s1m2").show();
	$("#p2s1m1,#welcome,#p2s1s,#p2s2m1,#p2s2m2,#p2s2s").hide();
	$("#p1s1m1,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();//TO HIDE PUC-1 DETAILS
  });
  $("#p2s1-s-b").click(function(){
	$("#p2s1s").show();
	$("#p2s1m1,#welcome,#p2s1m2,#p2s2m1,#p2s2m2,#p2s2s").hide();
	$("#p1s1m1,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();//TO HIDE PUC-1 DETAILS
  });

  // TO SHOW THE PUC-2-SEM-2 DETAILS

  $("#p2s2-m1-b").click(function(){
	$("#p2s2m1").show();
	$("#welcome,#p2s2m2,#p2s2s,#p2s1m1,#p2s1m2,#p2s1s").hide();
	$("#p1s1m1,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();//TO HIDE PUC-1 DETAILS
  });
  $("#p2s2-m2-b").click(function(){
	$("#p2s2m2").show();
	$("#p2s2m1,#welcome,#p2s2s,#p2s1m1,#p2s1m2,#p2s1s").hide();
	$("#p1s1m1,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();//TO HIDE PUC-1 DETAILS
  });
  $("#p2s2-s-b").click(function(){
	$("#p2s2s").show();
	$("#p2s2m1,#welcome,#p2s2m2,#p2s1m1,#p2s1m2,#p2s1s").hide();
	$("#p1s1m1,#p1s1m2,#p1s1s,#p1s2m1,#p1s2m2,#p1s2s").hide();//TO HIDE PUC-1 DETAILS
  });
});

window.addEventListener('load', function() {
  if(getElementById("aa").value()=="R"){
	  document.getElementById('aa').style.backgroundColor = 'red';
  }
  else{
  document.getElementById('aa').style.backgroundColor = 'blue';
  }

 
});
	</script>

</head>
<body>


<div class="body-container header ps-3 border border-dark border-bottom-3">
		<img src="../images/logo.png" height="50px" width="60px" class="me-3">
		<h4> :: ExamCell  IIIT-R.K.Valley::</h4>
		<h3 class="profile"><?php /*session_start();*/ echo $_SESSION['uid'];?></h3>
	</div>
	<div class="body-container">
	<section class="con">	
		<nav class="nav flex-column" >
			<ul class="navbar-nav mt-3">
				<li class="nav-item ps-5">
					<a href="welcome1.php" class="nav-link active text-dark bi-list">
						DashBoard
					</a>
				</li>
				<li class="nav-item ps-5 dropdown">
					<a href="python.html" class="nav-link text-dark bi-filetype-py" data-bs-toggle="collapse" data-bs-target="#p1-s1">
					 	P1-SEM1<ul class="collapse active" id="p1-s1">
					 		<li class="subli" id="p1s1-m1-b">MID-1</li>
					 		<li class="subli" id="p1s1-m2-b">MID-2</li>
					 		<li class="subli" id="p1s1-s-b">SEM</li>
					 	</ul>
					</a>
				</li>
				<li class="nav-item ps-5 ">
					<a href="#" class="nav-link text-dark bi-cup-hot-fill" data-bs-toggle="collapse" data-bs-target="#p1-s2">
					 P1-SEM2<ul class="collapse" id="p1-s2">
					 		<li class="subli" id="p1s2-m1-b">MID-1</li>
					 		<li class="subli" id="p1s2-m2-b">MID-2</li>
					 		<li class="subli" id="p1s2-s-b">SEM</li>
					 	</ul>
					</a>
				</li>
				<li class="nav-item ps-5 ">
					<a href="#" class="nav-link text-dark bi-c-circle" data-bs-toggle="collapse" data-bs-target="#p2-s1">
					 P2-SEM1<ul class="collapse" id="p2-s1">
					 		<li class="subli" id="p2s1-m1-b">MID-1</li>
					 		<li class="subli" id="p2s1-m2-b">MID-2</li>
					 		<li class="subli" id="p2s1-s-b">SEM</li>
					 	</ul>
					</a>
				</li>
				<li class="nav-item ps-5 ">
					<a href="#" class="nav-link text-dark bi-diagram-3-fill" data-bs-toggle="collapse" data-bs-target="#p2-s2">
					 P2-SEM2<ul class="collapse" id="p2-s2">
					 		<li class="subli" id="p2s2-m1-b">MID-1</li>
					 		<li class="subli" id="p2s2-m2-b">MID-2</li>
					 		<li class="subli" id="p2s2-s-b">SEM</li>
					 	</ul>
					</a>
				</li>
				<!--<li class="nav-item ps-5 ">
					<a href="profile.php" class="nav-link text-dark bi-browser-edge">
					 Profile
					</a>
				</li><
				<li class="nav-item ps-5 mb-2">
					<a href="" class="nav-link text-dark bi-github">
				 		Faculty Survey
					</a>
				</li><br>--><br>
				<li class="nav-item bg-danger btn w-75 ms-4 p-0 rounded-pill"><a class="nav-link text-dark" id="btn" onclick="logout()">Logout</a></li>
			</ul>
		</nav>
	</section>
	<section class="cont">
		<div class="container d " style="height: 100%" >
            <div class="w-100"><b id="welcome" >Welcome to RGUKT-R.K.Valley.</b>
            <div class="extra">
            
			<!--TO INCLUDE PUC-1 SEM-2 FILES-->

           <?php include '../P1-S1/p1s1m1.php';?>
           <?php include '../P1-S1/p1s1m2.php';?>
            <?php include '../P1-S1/p1s1s.php';?>

			<!--TO INCLUDE PUC-1 SEM-1 FILES-->

         <?php include '../P1-S2/p1s2m1.php';?>
          <?php include '../P1-S2/p1s2m2.php';?>

			<!--TO INCLUDE PUC-2 SEM-1 FILES-->

         <?php include '../P2-S1/p2s1m1.php';?>
            <?php include '../P2-S1/p2s1m2.php';?>

			<!--TO INCLUDE PUC-2 SEM-2 FILES-->

          <!-- <?php include '../P2-S2/p2s2m1.php';?>
            <?php include '../P2-S2/p2s2m2.php';?>
            <?php include '../P2-S2/p2s2s.php';?>    -->

			
            </div>
            </div>
		</div>
	</section>
</body>
</html>
