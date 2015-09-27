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
		<img title="xkcd cartoon" alt="...xkcd cartoon..." src="http://imgs.xkcd.com/comics/password_strength.png">
		<br>cartoon by Randall P. Munroe, from xkcd.com 
		<br>
      <a href="http://xkcd.com/936/">link to http://xkcd.com</a>
		<br>
		<br>         
      <p>The message of the cartoon is longer passwords that are conversational phrases 
      	beat cryptic passwords.  The phrases are easier to remember, and more difficult 
      	to hack because of the length.  The cryptic passwords look secure on the surface, 
      	but short passwords can be hacked by "brute force" methods. </p>
      <br>
      <h4>Gregg's Password Generator</h4>
		<form method='POST' action='index.php'>
		<br>
		How many words in your password? 
		<input type='number' name='wordsInPassword' min="3" max="9" step="1" value=3 >
		(min 3, max 9)
		<br>
		Number to append to the password  
		<input type='text' name='includeNumber' size="1" maxlength="1"  >
		(leave empty for none)
		<br>
		Special character to append to the password  
		<input type='text' name='includeSpecChar' size="1" maxlength="1" >
		(leave empty for none)
		<br> 
		Password word separator   
		<input type='text' name='wordSeperator' size="1" maxlength="1" value="-" >
		('-' is the default)
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
		$varWordSeperator = $_POST['wordSeperator'];	
	}
	?>
	 Generated password: <?php echo $concatPassword ?>		
  			 <!--   <div class="button">   -->
  			 <br>
        	<br>
         <br>

    </div>
  				
</form>

	 
</body>
</html>
