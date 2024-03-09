<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P1S1-MID1</title>

    <link rel="stylesheet" href="../css/table.css">
</head>
<body>

    <?php 
        include '../DATABASE/p1s1mid1.php';
    ?>

<section class="cont">
		<div class="container d" style="height: 100%">
            <div  class="w-100" style="text-align:center;" id="p1s1m1">
                <b class="head" ><u>AY-20-21 PUC-1 SEM-1 Mid-1 Results</u></b>
            <table class="details" style="text-align: left;">
                <tr>
                    <td ><b>NAME: </b></td>
                    <td><?php echo $name;?></td>
                </tr>
                <tr>
                    <td><b>ID: </b></td>
                    <td><?php  echo $_SESSION['uid'];?></td>
                </tr>
            </table>
            
            <table class="table result" border="1" style="width:100%">
                <tr class="main">
                    <th>S:NO</th>
                    <th>SUBJECT NAME</th>
                    <th>MARKS</th>
                </tr>
                <tr>
                    <td>01</td>
                    <td>Telugu</td>
                    <td><?php echo $telugu;?></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>English</td>
                    <td><?php echo $english;?></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Physics</td>
                    <td><?php echo $physics;?></td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Chemistry</td>
                    <td><?php echo $chemistry;?></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>IT</td>
                    <td><?php echo $it;?></td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Maths</td>
                    <td><?php echo $maths;?></td>
                </tr>
            </table>
            </div>
		</div>
	</section>
</body>
</html>
