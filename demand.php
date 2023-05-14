<html>
<head>
<title>Demandtype Processing</title>
</head>
<body>
<h2>Demand TypeDetail Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$Demand_ID=$_POST["demand_id"];
$Demand_Name=$_POST["demand_name"];


$query="INSERT into tbl_demandtype(Demand_id, Demand_name)
VALUES('$Demand_ID', '$Demand_Name')";

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
