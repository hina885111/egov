<html>
<head>
<title>Payment Method Processing</title>
</head>
<body>
<h2>Paymentdetail Method  Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$Payment_Id=$_POST["Payment_id"];

$Payment_name=$_POST["Fullname"];
$Payment_status=$_POST["status"];


$query="INSERT into payment_method(payment_id, Payment_Name,Status)
VALUES('$Payment_Id', '$Payment_name','$Payment_status')";

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
