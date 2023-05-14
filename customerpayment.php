<html>
<head>
    
    
<title>Customer Bill Processing</title>
</head>
<body>
<h2>Customer Bill Detail Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$payment_id=$_POST["Payment_id"];
$Sc_no=$_POST["SN"];
$bill_Id=$_POST["Bill_id"];
$Bill_amnt=$_POST["Bill_amount"];

$payment_method_Id=$_POST["Payment_method_Id"];
$paymentamount=$_POST["Payment_Amount"];
$payment_date=$_POST["Payment_date"];

$query=("INSERT into tbl_customer_payment(payment_id,Sc_no, bill_id, bill_amount, payment_method_id, payment_amount, payment_date)
VALUES('$payment_id', '$Sc_no', '$bill_Id','$Bill_amnt', '$payment_method_Id', '$paymentamount', '$payment_date')");

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

