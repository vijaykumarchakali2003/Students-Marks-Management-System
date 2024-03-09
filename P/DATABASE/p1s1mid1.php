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

    $query = "SELECT * FROM PUC1S1MID1 WHERE ID='$uid'";

    $check = mysqli_query($connect,$query);
    $result = mysqli_fetch_assoc($check);

    $telugu_marks = $result['TELUGU'];
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

?>
