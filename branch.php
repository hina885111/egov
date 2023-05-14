<html>
<head>
<title>Branch Processing</title>
</head>
<body>
<h2>Branch Detail Processing</h2>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$Branch_Id=$_POST["Branch_id"];

$Branch_name=$_POST["Fullname"];
$Branch_status=$_POST["status"];


$query="INSERT into tbl_branch(branch_id, branch_name,Status)
VALUES('$Branch_Id', '$Branch_name','$Branch_status')";

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
