<?php
	$car = array("Saab","Volto","BMW","Toyota");
	
	$car[0] = "Saab";
	$car[1] = "Volto";
	$car[2] = "BMW";
	$car[3] = "Toyota";
	
	/*$car[] = "Saab";
	$car[] = "Volto";
	$car[] = "BMW";
	$car[] = "Toyota"; */
	
	//echo $car[1];
	
	for($i=0; $i<count($car); $i++){
		echo $car[$i] ."<br>";
	}
	////////////////////////////////////////////////
	
	$ages = array("a"=>10, "b"=> 1, "c"=> 1990);
	
	echo "<pre>";
	print_r($ages);
	echo "</pre>";
	
	foreach ($ages as $key=>$val){
		echo $key.":".$val . "<br />";
	}
	
	///////////Multi array//////////////////
	
	$student = array();
	
	$student["SV001"] = array("id"=>1, 
							  "name"=>"Dieu",
							  "age"=>20, 
							  "points"=>array(10, 9, 8));
	$student["SV002"] = array("id"=>2, 
							  "name"=>"Tuyen",
							  "age"=>20, 
							  "points"=>array(7, 5, 8));
	$student["SV003"] = array("id"=>3, 
							  "name"=>"Ly",
							  "age"=>20, 
							  "points"=>array(5, 7, 6));
	/*echo $student["SV001"]["age"];
	echo $student["SV001"]["points"][2];
	echo $student["SV003"]["name"];*/
	$student["SV003"]["name"]="Long";
	echo "<pre>";
	print_r($student);
	echo "</pre>";
	echo "abc";
	
	
	
	