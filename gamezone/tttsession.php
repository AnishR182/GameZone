<?php
$pname=$_GET["pname"];
$hsign=$_GET["sign"];
$boardpattern=$_GET("boardpattern");


if ($hsign=='X')
 	$gsign='O';
else
	$gsign='X';

$con = mysqli_connect('localhost','root','macbookpro18','ttt_db');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"ttt_db");

function create_game(){
	$host= getHost();
	$gameid = 
	$sql= "Insert into 'tictactoe' ('gameid', 'hostsign', 'guestsign', 'boardpattern') values (:)"
}

	


?>