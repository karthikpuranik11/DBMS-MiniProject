<?php include 'database.php';
?>

<?php

// create a variable
$lot_no = false;
if(isset($_POST['l_no'])){
    $lot_no = $_POST['l_no'];
 } 
$serial_no = false;
if(isset($_POST['s_no'])){
    $serial_no = $_POST['s_no'];
 } 
$pr_type=false;
if(isset($_POST['type'])){
    $pr_type = $_POST['type'];
 } 
$weight=false;
if(isset($_POST['wt'])){
    $weight=$_POST['wt'];
 } 

$mat_id=false;
if(isset($_POST['m_id'])){
    $mat_id=$_POST['m_id'];
 } 
$no_of_u=false;
if(isset($_POST['no_units'])){
    $no_of_u=$_POST['no_units'];
 } 
$pr_type=false;
if(isset($_POST['type'])){
    $pr_type = $_POST['type'];
 } 

$cost=false;
if(isset($_POST['cost'])){
    $cost=$_POST['cost'];
 } 
$descr=$_POST['desc'];
if(isset($_POST['desc'])){
    $descr=$_POST['desc'];
 } 

//Execute the query

mysqli_query($connect,"INSERT INTO lot VALUES('$lot_no', '$cost'*'$no_of_u')");
mysqli_query($connect,"INSERT INTO production VALUES('$lot_no', '$serial_no','$weight','$pr_type','$descr')");
mysqli_query($connect,"INSERT INTO material VALUES('$lot_no', '$no_of_u', '$mat_id','$cost')");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Product added</p>";
	echo '<a href="view.php">View Product</a>';
	echo "<br>";
	echo '<a href="index.php">Go Back</a>';
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
 
