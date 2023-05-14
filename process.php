<html>
<head>
<title>Customer Processing</title>
</head>
<body>
<h2>Customer Detail Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$Sc_no=$_POST["SN"];
$CustomerId=$_POST["customer_id"];
$customer_fullname=$_POST["fullname"];
$Demandtype=$_POST["demandtype"];
$Mobile_no=$_POST["phonenumber"];

$query=("INSERT into tbl_customer(SC_No, Customer_id, customer_fullname, Demand_type, Mobile_no)
VALUES('$Sc_no', '$CustomerId','$customer_fullname', '$Demandtype', '$Mobile_no')");

echo $query;
$result=mysqli_query($conn, $query);
if($result){
echo"Data inserted successfully";
}
else{
    echo"Error:".$query.":-" .mysqli_error($conn);
}
mysqli_close($conn);
}
?>
</body>
</html>
