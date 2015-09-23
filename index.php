<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!doctype html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/canvas.css">
   <script type="text/javascript" src="js/p1.js"></script>
   <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
  	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	a.one:link {color:BLUE;text-decoration:none;}
	a.one:visited {color:BLUE;text-decoration:none;}
	a.one:hover {text-decoration:underline;}
	</style>	   
	
	<?php
	require('logic.php');
	?>
	
	
	
</head>

<body>  
	<div class="container-fluid">
  		<div class="jumbotron">
    		<h2>Dynamic Web Applications Portfolio - Lindal Gregg Tompkins</h2> 
  		</div>
  	<div class="container-fluid"> 
      <h2 align="center">Project 2 - xkcd Password Generator</h2>
      <br>
      <h4>The premise of the cartoon and the "passphrase" password trend is that longer passwords 
      	 that are conversational phrases surpass cryptic passwords.  The cryptic passwords
      	 look secure on the surface, but short passwords can be hacked by "brute force" methods. </h4>
      <br>
      <h4>Here's the link to the xkcd cartoon </h4>
      <a href="http://xkcd.com/936/">http://xkcd.com</a>
      <br>
      <br>
	 
		<form method='POST' action='index.php'>
		<br>
		How many words in your password (min 3, max 9)? 
		<input type='number' name='wordsInPassword' min="3" max="9" step="1" >
		min/max message
		<br>
		Append a number to the password? 
		<!-- <input type='text' name='includeNumber' size="1" maxlength="1" ><br>  -->
		<input type='checkbox' name='includeNumber' value="useNumber" ><br>

		Append a special character to the password? 
		<!-- <input type='text' name='includeSpecChar' size="1" maxlength="1" ><br> -->
		<input type='checkbox' name='includeSpecChar' value="useSpecChar" /> 
		<br>
		<br>
		<input type='submit' name="formSubmit" value='Submit'>

	</form>

	<?php 
	if($_POST['formSubmit'] == 'Submit') 
	{
		$varWordsInPassword = $_POST['wordsInPassword'];
		$varIncludeNumber = $_POST['includeNumber'];
		$varincludeSpecChar = $_POST['includeSpecChar'];	
	}
	?>
	 Generated password: <?php echo $concatPassword ?>		
  			 <!--   <div class="button">   -->
  			 <br>
   <!-- <button type="submit">Send your message</button>   -->
        	<br>
         <br>

    </div>
  				
</form>

	 
</body>
</html>
