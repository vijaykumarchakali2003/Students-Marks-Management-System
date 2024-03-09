<?php

			ini_set('display_errors',1);
			ini_set('display_startup_errors',1);
			error_reporting(E_ALL);
			
			session_start();

			if(isset($_POST['btn']))
			{

				$_SESSION['uid']=$_POST['uid'];
				$uid=$_SESSION['uid'];
				

				$_SESSION['pwd']=$_POST['pwd'];
				$pwd=$_SESSION['pwd'];

				/*$cookie_value = $_POST['uid'];
				setcookie ('uid',$cookie_value,time()+3600);

				$cookie_value1 = $_POST['pwd'];
				setcookie ('pwd',$cookie_value1,time()+3600);
						
				echo $_COOKIE['uid'];
				echo $_COOKIE['pwd'];*/

				//$uid=$_COOKIE['uid'];
				//$pwd = $_COOKIE['pwd'];


				include "../DATABASE/connection.php";

				$query="SELECT * FROM login;";
				$check=mysqli_query($connect,$query);
				if(mysqli_num_rows($check))
				{
					$count=0;
					while($row=mysqli_fetch_assoc($check))
					{
						print_r($row);
						if($row['UID']==$uid)
						{
							$count=1;
						}
						else
						{
							$count=$count;
						}
					}
					if($count==1)
					{
						print_r($check);
						$query1="SELECT * FROM login WHERE UID='$uid'";
						$check1=mysqli_query($connect,$query1);
						$row1=mysqli_fetch_assoc($check1);
						echo $row1;
						echo $pwd;
						print_r($row1);
						if ($row1['PWD']==$pwd) {
							//session_destroy();
							header("Location:welcome.php");
							exit;
						}
						else{
							echo "Incorrect Password.<br>";
						}
					}
					else
					{
						echo "User Doesn't Exist.<br>";
					}
				}
			}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=font-effect-crackle">

		<link rel="stylesheet" href="../css/login.css">
</head>

<body>

<div class="head">
	<table>
		<tr>
			<th  id="img" rowspan=2><img src="../images/logo1.png"></th>
			<td id="row1"><h1>Rajiv Gandhi University Of Knowledge and Technologies</td>
		</tr>
		<tr>
			<th id="row2"><h2> Examcell IIIT Rk valley</h2></th>
		</tr>
	</table>

</div>
<div class="container">    
	<form action="" method="POST">
		<h1 style="color:white;">
			Login
		</h1>
		<input type="text" name="uid" id="uname" placeholder="Username" required class="form-control rounded-pill"style="margin-top:30px;"><br>
		<input type="password" name="pwd" id="pwd" placeholder="Password" required class="form-control rounded-pill" style="margin-bottom:30px;">

		<span style="color:yellow">
		
		</span>
		<button type="submit" name="btn" class="btn btn-danger rounded-pill w-100"><b>Login</button><br>
	</form>
</div>
</body>
</html>

