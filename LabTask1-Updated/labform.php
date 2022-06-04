<!-- Name: Shafiul Ajam Opee 
     ID  : 2O-43194-1-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Creation</title>
</head>
<body>
	<form action="link_page.php" method="POST">
	<hr>
	<h4>General</h4>
		<label for="fname">First Name: </label>
		<input type="text" id="fname" name="fname"> <br></br>
		<label for="lname">Last Name: </label>
		<input type="text" id="lname" name="lname">
		<h4>Gender <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female</h4>
	</hr>
	<hr>
	<h4>Contract</h4>
		<label for="Email">Email</label>
		<input type="tel" id="Email" name="email"><br></br>
		<label for="phoneno">Mobile No</label>
		<input type="tel" id="phoneno" name="phoneno">
	</hr>
	<hr>
	<h4>Address</h4>
		Street/House/Road
		<label for="Street/House/Road"></label>
		<input type="text" id="Street" name="Street"><br></br>
		country
		<select>
        <option value="Bangladesh" name="country">Bangladesh</option>
        <option value="India" name="country">India</option>
        <option value="Japan" name="country">Japan</option>
        <option value="China" name="country">China</option>
      	</select>
	</hr>
	<hr>
  	<input type="submit" name="Submit" value="Submit">
</hr>
</form>
</body>
</html>