<?php

include 'searchModel.php'; 
$originForm = $_GET["origin"];
$destinationForm = $_GET["destination"];
$depart = $_GET["depart"];
$passengers = $_GET["passengers"];


<option value="Malaysia">Kuala Lumpur International Airport, Kuala Lumpur</option>
<option value="Brunei">Brunei International Airport , Brunei</option>
<option value="China">Wuhan Tianhe International Airport ,China</option>
<option value="Hongkong">Hong Kong International Airport, Hong Kong</option>
<option value="India">Chennai International Airport, India</option>
<option value="Indonesia">Husein Sastranegara International Airport, Bandung Indonesia</option>
<option value="Singapore">Singapore Changi Airport, Singapore</option>
<option value="Taiwan">Taipei Taoyuan International Airport, Taiwan</option>
<option value="Thailand">Krabi Airport, Thailand</option>
<option value="Korea">Incheon International Airport, South Korea</option>
<option value="Vietnam">Noi Bai International Airport, Hanoi Vietnam</option>


if($originForm == "Malaysia"){
	$origin = "KUL";
}
else if($originForm == "Brunei"){
	$origin = "BWN";
}
else if($originForm == "China"){
	$origin = "WUH";
}
else if($originForm == "Hongkong"){
	$origin = "HKG";
}
else if($originForm == "India"){
	$origin = "MAA";
}
else if($originForm == "Indonesia"){
	$origin = "BDO";
}
else if($originForm == "Singapore"){
	$origin = "SIN";
}
else if($originForm == "Taiwan"){
	$origin = "TPE";
}
else if($originForm == "Thailand"){
	$origin = "KBV";
}
else if($originForm == "Korea"){
	$origin = "ICN";
}
else if($originForm == "Vietnam"){
	$origin = "HAN";
}
else{
	$origin = "error";
}

if($originForm == "Malaysia"){
	$origin = "KUL";
}
else if($originForm == "Brunei"){
	$origin = "BWN";
}
else if($originForm == "China"){
	$origin = "WUH";
}
else if($originForm == "Hongkong"){
	$origin = "HKG";
}
else if($originForm == "India"){
	$origin = "MAA";
}
else if($originForm == "Indonesia"){
	$origin = "BDO";
}
else if($originForm == "Singapore"){
	$origin = "SIN";
}
else if($originForm == "Taiwan"){
	$origin = "TPE";
}
else if($originForm == "Thailand"){
	$origin = "KBV";
}
else if($originForm == "Korea"){
	$origin = "ICN";
}
else if($originForm == "Vietnam"){
	$origin = "HAN";
}

$arr = $theDBA->getFlights ($origin, $destination, $depart, $passengers);


echo  json_encode($arr);
?>
