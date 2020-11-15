<?php include 'database.php';
?>

<?php

// create a variable
$lot_no = false;
if(isset($_POST['l_no'])){
    $lot_no = $_POST['l_no'];
 } 

//Execute the query
$sql="select serial_no, weight, pr_type, descr from production where lot_no='$lot_no'"; 
//mysqli_query($connect, "select serial_no, weight from production where lot_no='$lot_no' ");
$result = mysqli_query($connect, $sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<h2>Product: ". $row["pr_type"] ."</h2>";
		echo "<h4>". $row["descr"] ."</h4>";
		echo "Lot number: " . "$lot_no";
		echo "<br>";
		echo "Serial number: " . $row["serial_no"]; 
		echo "<br>";
		echo "Weight: " . $row["weight"];
		//echo $row["total"];
}				
} else {
  echo "0 results";
}


if(mysqli_affected_rows($connect) > 0){
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo '<a href="view.php">View another Product</a>';
	echo "<br>";
	echo '<a href="index.php">Go Back</a>';
} else {
	echo mysqli_error ($connect);
}
 