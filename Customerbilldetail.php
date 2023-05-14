<html>
<head>
<title>Customer Bill Form</title>
</head>
<body>
<h2>NEA Bill Customer Bill Detail Entry Form</h2>
<form action="customerbill.php" method="post">
<label>Customer_Id</label>
<input type="text" name="customer_id"/>
<br>

<label>Bill_Id</label>
<input type="text" name="Bill_id"/>
<br>

<label>Date_Of_Reading</label>
<input type="text" name="Date_reading"/>
<br>

<label>Current_Reading</label>
<input type="text" name="current_reading"/>
<br>

<label>Previous_Reading</label>
<input type="text" name="previous_reading"/>
<br>

<label>Bill_Month</label>
<input type="text" name="Bill_month"/>
<br>


<label>Bill_Year</label>
<input type="text" name="Bill_year"/>
<br>

<label>Bill_Amount</label>
<input type="text" name="Bill_amount"/>
<br>



<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
