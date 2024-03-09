<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P1S2-MID1</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
<section class="cont">
		<div class="container" style="height: 100%">
            <div  class="w-100" style="text-align:center;" id="p2s1m2">
                <b class="head" ><u>AY-20-21 PUC-2 SEM-1 MID-2 Results</u></b>
            <table class="details" style="text-align: left;">
                <tr>
                    <td ><b>NAME: </b></td>
                    <td><?php echo $name;?></td>
                </tr>
                <tr>
                    <td><b>ID: </b></td>
                    <td><?php $_SESSION['uid'];?></td>
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
