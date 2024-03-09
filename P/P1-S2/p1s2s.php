<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
<?php 
        include "../DATABASE/p1s2sem.php";
    ?>
<section class="cont">
		<div class="container d " style="height: 100%">
            <div  class="w-100" style="text-align:center;" id="p1s2s">
                <b class="details" ><u>AY-20-21 PUC-1 SEM-2 Results</u></b>
            <table class="" style="text-align: left;">
                <tr>
                    <td ><b>NAME: </b></td>
                    <td>T.Lokesh</td>
                </tr>
                <tr>
                    <td><b>ID: </b></td>
                    <td>R181015</td>
                </tr>
</table>			
			<table class="table result" border="1">
                <tr class="main">
                    <th>S:NO</th>
                    <th>SUBJECT NAME</th>
                    <th>MID-1</th>
                    <th>MID-2</th>
                    <th>BOM</th>
                    <th>INTERNAL</th>
                    <th>GRADE</th>
                    <th>Total</th>
                </tr>
                
                <tr>
                    <td>01</td>
                    <td>Telugu</td>
                    <td><?php echo $telugum1;?></td>
                    <td><?php echo $telugum2;?></td>
                    <td><?php echo $telugubom;?></td>
                    <td><?php echo $teluguex;?></td>
                    <th ><?php echo $telugut;?></th>
                    <th id="aa"><?php echo $telugug;?></th>
                </tr>
                <tr>
                    <td>02</td>
                    <td>ENGLISH</td>
                    <td><?php echo $englishm1;?></td>
                    <td><?php echo $englishm2;?></td>
                    <td><?php echo $englishbom;?></td>
                    <td><?php echo $englishex;?></td>
                    <th ><?php echo $englisht;?></th>
                    <th id="aa"><?php echo $englishg;?></th>
                    </tr>
                <tr>
                    <td>03</td>
                    <td>Physics</td>
                    <td><?php echo $physicsm1;?></td>
                    <td><?php echo $physicsm2;?></td>
                    <td><?php echo $physicsbom;?></td>
                    <td><?php echo $physicsex;?></td>
                    <th ><?php echo $physicst;?></th>
                    <th id="aa"><?php echo $physicsg;?></th>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Chemistry</td>
                    <td><?php echo $chemistrym1;?></td>
                    <td><?php echo $chemistrym2;?></td>
                    <td><?php echo $chemistrybom;?></td>
                    <td><?php echo $chemistryex;?></td>
                    <th ><?php echo $chemistryt;?></th>
                    <th id="aa"><?php echo $chemistryg;?></th>
                </tr>
                <tr>
                    <td>05</td>
                    <td>IT</td>
                    <td><?php echo $itm1;?></td>
                    <td><?php echo $itm2;?></td>
                    <td><?php echo $itbom;?></td>
                    <td><?php echo $itex;?></td>
                    <th ><?php echo $itt;?></th>
                    <th id="aa"><?php echo $itg;?></th>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Maths</td>
                    <td><?php echo $mathsm1;?></td>
                    <td><?php echo $mathsm2;?></td>
                    <td><?php echo $mathsbom;?></td>
                    <td><?php echo $mathsex;?></td>
                    <th ><?php echo $mathst;?></th>
                    <th id="aa"><?php echo $mathsg;?></th>
                </tr>
            </table>
            </div>
		</div>
	</section>
</body>
</html>