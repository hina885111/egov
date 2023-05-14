<?php
include("dbconnect.php");
$CUID=$_GET["customer_id"];
$query="SELECT *from tbl_customer where customer_id=$CUID";
$res=mysqli_query($conn,$query);
while($row1=mysqli_fetch_array($res)){
    ?>
    <br>
       <span>SCNO :</span><?php echo $row1["SC_No"];?><br>
    <span>Customer_id :</span><?php echo $row1["Customer_id"];?><br>
    <span>Full Name :</span><?php echo $row1["customer_fullname"];?><br>
    <span>Demand Types :</span><?php echo $row1["Demand_type"];?><br>
    <span>Mobilenumber:</span><?php echo $row1["Mobile_no"];?><br>
    <?php

}?>
<?php
$query1="SELECT * FROM  tbl_customer_payment where customer_id=".$CUID."";
$result=mysqli_query($conn,$query1);

echo"<table border='1'>
<tr>
    
    <td>Payment_id</td>
    <td>Customer id</td>
    <td>Bill id</td>
    <td>Bill Amount</td>
    <td>Payment Method Id </td>
    <td>Payment Amount</td>
    <td>Payment Date</td>
    


    

    

          

</tr>";
$i=1;
while($row=mysqli_fetch_array($result))
{
    echo"<tr>";
       
       echo"<td>".$row["payment_id"]."</td>";
       echo"<td>".$row["customer_id"]."</td>";
       echo"<td>".$row["bill_id"]."</td>";
       echo"<td>".$row["bill_amount"]."</td>";
       echo"<td>".$row["payment_method_id"]."</td>";
       echo"<td>".$row["payment_amount"]."</td>";
       echo"<td>".$row["payment_date"]."</td>";
       



       ?>
      
        <?php
        echo"</tr>";
        $i=$i+1;
}
       echo "</table>";

        ?>