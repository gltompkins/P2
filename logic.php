<?php
# variables
//$separator = "-";
$concatPassword = "";
$numTerminator = null;
$specCharTerminator = null;
//$DEBUGendOfPassword = "_END";

//$myEntries = Array();
//echo $myEntries[0];
//echo $myEntries[1];
//echo $myEntries[2];


//echo "numWords from form: ";
$varWordsInPassword = $_REQUEST['wordsInPassword'];
$varIncludeNumber  = $_REQUEST['includeNumber'];
$varIncludeSpecChar = $_REQUEST['includeSpecChar'];
$varWordSeperator = $_REQUEST['wordSeperator'];

//echo $varWordsInPassword, $varIncludeNumber ,$varIncludeSpecChar;
//echo "after post numWords: ";

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
	"car"	
);


$i = 0;
while ($i < $varWordsInPassword){
   if ($i == 0) {
   	$concatPassword = $keyWordsArray[rand(0,$varWordsInPassword-1)];
   } 
   else {
   	$concatPassword = $concatPassword . $varWordSeperator . $keyWordsArray[rand(0,$varWordsInPassword-1)];
   }     
   $i++;
}

$concatPassword = $concatPassword . $varIncludeNumber . $varIncludeSpecChar;

//echo '\n $concatPassword after while loop : ' , $concatPassword;


