<html>
<head>
<title>Customer Bill Processing</title>
</head>
<body>
<h2>Customer Bill Detail Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
    
$customer_id=$_POST["customer_id"];
$Bill_id=$_POST["Bill_id"];
$Date_Reading=$_POST["Date_reading"];
$Current_Reading=$_POST["current_reading"];
$Prev_Reading=$_POST["previous_reading"];
$Billmonth=$_POST["Bill_month"];
$Billyear=$_POST["Bill_year"];
$Billamount=$_POST["Bill_amount"];


$query="INSERT into tbl_customerbill(customer_id,Bill_id, Date_of_reading, curr_reading, prev_reading, bill_month, bill_year, bill_amount)
VALUES('$customer_id', '$Bill_id', '$Date_Reading','$Current_Reading', '$Prev_Reading', '$Billmonth', '$Billyear', '$Billamount')";

echo $query;
$result=mysqli_query($conn, $query);
if($result){
echo"Succesfull message";
}
else{
    echo"Error:".$query.":-" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
