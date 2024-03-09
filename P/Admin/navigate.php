 <?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
echo "HI";
$puc = $_POST["puc"];
echo $puc;
 $semester = $_POST["semester"];
 $examType = $_POST["examType"];
echo $examType;

    if ($examType == "mid1" || $examType == "mid2") {
         header("Location: mid_page.php");
    } elseif ($examType == "sem") {
       
   }
?>

