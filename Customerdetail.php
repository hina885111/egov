<html>
<head>
<title>Customer Form</title>
</head>
<body>
<h2>NEA Bill Customer Detail Entry Form</h2>
<form action="process.php" method="post">
<label>Sc_no</label>
<input type="text" name="SN"/>
<br>

<label>Customer_Id</label>
<input type="text" name="customer_id"/>
<br>

<label>customer_fullname</label>
<input type="text" name="fullname"/>
<br>


<label>Demand_Type</label>
<select name="demandtype">
<option value="" disabled selected>Choose option</option>
<option value="5">5A</option>
<option value="15">15A</option>
<option vlaue="30">30A</option>
</select>
<br>

<label>Mobile_Number</label>
<input type="text" name="phonenumber"/>
<br>

<input type="submit" name="submit" value="submit form"/>
</form>
</body>
</html>
