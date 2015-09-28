<?php
# variables
$concatPassword = "";

if (isset($_POST['wordsInPassword']))    
{    
   $varWordsInPassword = $_REQUEST['wordsInPassword'];
}    
if (isset($_POST['includeNumber']))    
{    
	$varIncludeNumber  = $_REQUEST['includeNumber'];
}    
if (isset($_POST['includeSpecChar']))    
{    
	$varIncludeSpecChar = $_REQUEST['includeSpecChar'];
}    
if (isset($_POST['wordSeperator']))    
{    
	$varWordSeperator = $_REQUEST['wordSeperator'];
}    

/*
Create an array of key words
*/
$keyWordsArray = Array(
	"pool", 
	"door", 
	"gizmo", 
	"hair",
	"shrimp",
	"scrabble",
	"eggs",
	"bowling",
	"shop",
	"blue",
	"red",
	"car",
	"zip",
	"rodeo",
	"pickup",
	"chase",
	"fire"
);

// count the array elements
$arrayCount = count($keyWordsArray);
//echo $arrayCount;

if(isset($_POST['formSubmit'])) {
	if($_POST['formSubmit'] == 'Submit') {
		$i = 0;
		while ($i < $varWordsInPassword){
   		if ($i == 0) {
   			$concatPassword = $keyWordsArray[rand(0,$arrayCount-1)];
   		} 
   		else {
   			$concatPassword = $concatPassword . $varWordSeperator . $keyWordsArray[rand(0,$arrayCount-1)];
   		}     
   	$i++;
		}
	$concatPassword = $concatPassword . $varIncludeNumber . $varIncludeSpecChar;
	}
}
