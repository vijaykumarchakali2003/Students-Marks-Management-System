<?php 


    include 'connection.php';

    //SUCCESSFULLY CONNECTED SO I AM COMMENTING IT
    /*if ($connect) {
       echo "Connection Established"; 
    }
    else {
        echo "Connection Not Established";
    }*/


    $uid = $_SESSION['uid'];

    $query = "SELECT * FROM P1S1SEM WHERE ID='$uid'";

    $check = mysqli_query($connect,$query);
    while($row=mysqli_fetch_assoc($check)){
       if($row['SUBJECT']=="TELUGU"){
        $telugum1=$row['MID1'];
        $telugum2=$row['MID2'];
        $telugubom=$row['BOM'];
        $teluguex=$row['EXTERNAL'];
        $telugut=$row['TOTAL'];
        $telugug=$row['GRADE'];
       }
       if($row['SUBJECT']=="ENGLISH"){
        $englishm1=$row['MID1'];
        $englishm2=$row['MID2'];
        $englishbom=$row['BOM'];
        $englishex=$row['EXTERNAL'];
        $englisht=$row['TOTAL'];
        $englishg=$row['GRADE'];
       }
       if($row['SUBJECT']=="PHYSICS"){
        $physicsm1=$row['MID1'];
        $physicsm2=$row['MID2'];
        $physicsbom=$row['BOM'];
        $physicsex=$row['EXTERNAL'];
        $physicst=$row['TOTAL'];
        $physicsg=$row['GRADE'];
       }
       if($row['SUBJECT']=="CHEMISTRY"){
        $chemistrym1=$row['MID1'];
        $chemistrym2=$row['MID2'];
        $chemistrybom=$row['BOM'];
        $chemistryex=$row['EXTERNAL'];
        $chemistryt=$row['TOTAL'];
        $chemistryg=$row['GRADE'];
       }
       if($row['SUBJECT']=="IT"){
        $itm1=$row['MID1'];
        $itm2=$row['MID2'];
        $itbom=$row['BOM'];
        $itex=$row['EXTERNAL'];
        $itt=$row['TOTAL'];
        $itg=$row['GRADE'];
       }
       if($row['SUBJECT']=="MATHS"){
        $mathsm1=$row['MID1'];
        $mathsm2=$row['MID2'];
        $mathsbom=$row['BOM'];
        $mathsex=$row['EXTERNAL'];
        $mathst=$row['TOTAL'];
        $mathsg=$row['GRADE'];
       }
    }

   /* $telugu_marks = $result['TELUGU'];
    $english_marks = $result['ENGLISH'];
    $physics_marks = $result['PHYSICS'];
    $chemistry_marks = $result['CHEMISTRY'];
    $it_marks = $result['IT'];
    $maths_marks = $result['MATHS'];
    $name=$result['NAME'];

    $telugu = $telugu_marks;
    $english = $english_marks;
    $physics = $physics_marks;
    $chemistry = $chemistry_marks;
    $it = $it_marks;
    $maths = $maths_marks;

    */
    


?>
