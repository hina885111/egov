<?php
include("dbconnect.php");
$query="select*from tbl_customer";
$result=mysqli_query($conn,$query);

echo"<table border='1'>
    <tr>
    <td> SN </td>
        <td> SC_No </td>
        <td> Customer_id </td>
        <td> customer_fullname </td>
        <td> Demand_type </td>
        <td> Mobile_no </td>
        <td> Action </td>

    </tr>" ;
    $i=1;
     
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
            echo "<td>" .$i . "</td>";
            echo "<td>" .$row['SC_No'] . "</td>";
            echo "<td>" .$row['Customer_id'] . "</td>";
            echo "<td>" .$row['customer_fullname'] . "</td>";
            echo "<td>" .$row['Demand_type'] . "</td>";
            echo "<td>" .$row['Mobile_no'] . "</td>";
    
            ?>
            <td> <a href="view_bill.php?customer_id=<?php echo $row['Customer_id'];?>"> View Bill</a>||
             <a href="view_payment.php?customer_id=<?php echo $row['Customer_id'];?>"> View Payment</a>
    </td>

    <?php
    echo "</tr>";
    $i=$i+1;
}
echo "</table>";
  ?>          
            


