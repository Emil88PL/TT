<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head lang="en">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">	
		<script
	  src="https://code.jquery.com/jquery-3.1.1.js"
	  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
	  crossorigin="anonymous"></script>
		<script src="scripts.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<title>ToucanTech</title>
	</head>
	<body>
	<div class="container">
	
	<form action="members.php" method="POST"> 	
		Name:<br/>
		<input type="text" name="name" autofocus placeholder="Type in your Name" size="28" required><br/>
		Email Address:<br/>
		<input type="email" name="email" placeholder="Type in your Email Address" size="28" required><br/>
		School:<br/>
		<select name="schools" id="schools" required>
			<option value="" >Select...</option>
			<option value="school1" >School1</option>
			<option value="school2" >School2</option>
		</select>
		<input type="submit" class="btn btn-secondary btn-sm" name="Submit"/>
		<input type="button" class="btn btn-secondary btn-sm" onclick="addschool()" value="Add school"/>				
	</form>

	<script>
		function addschool(){
	var option = document.createElement("option");
	option.text = prompt("Name of school: ");
	option.value = option.text.toLowerCase();
	var select = document.getElementById("schools");
	select.appendChild(option);
}		
	</script>
	






	<hr/>
	<br/>

	<?php 
  	 $path = $_SERVER['DOCUMENT_ROOT'];
  	 $path .= "/ToucanTech/table.php";
 	  include_once($path);
	?>

</div>

	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>