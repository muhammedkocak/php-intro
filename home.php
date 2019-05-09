<?php

//1 Create an array, an associative array and an object in home.php.




//Array
$chevy = array ("BLAZER" , "SUBURBAN" , "C/K30");


//Associative Array
$favModels = array (
  "BLAZER" => "K5",
  "SUBURBAN" => "GMC",
  "C/K30" => "DUALLY"
);


//Object
class crewCAb {
var $drive = 4;
var $wheels = 6;
var $engine = "454";


};

$chassis = new crewCab;


//2Write a for-loop that adds an item to all of the above.
for($i = 0; $i <= 3; $i++){
  if($i === 1){
  array_push($chevy,'AVALANCHE');
  }
  else if($i === 2){
  array_push($favModels["BLAZER"], 'S-10');
  array_push($favModels["SUBURBAN"], 'SCOTTSDALE', 'SILVERADO');
  array_push($favModels["C/K30"], '', 'UTILITYCAB');
  
  }
  else if($i === 3){
  $chassis->color = 'black';
  }
  }
  
  
  
  
  
  
  
  
  
?>