<?php 

$personAge = 21;
$country = "";
$vacation = "";

if ($personAge >= 15 and $personAge <= 18) {
    $country = "Singapore";
} elseif ($personAge == 19) {
    $country = "United Kingdom";
} elseif ($personAge >= 20 and $personAge <= 23) {
    $country = "Canada";
} else {
    $country = "United States";
}

switch($country) {
    case "Singapore":
        $vacation = "France";
        break;
    case "United Kingdom":
       $vacation = "USA";
        break;
    case "Canada":
        $vacation = "Philippines";
        break;
    default:
        $vacation = "Japan";
        break;    
}

echo "Country: " . $country;
echo "<br>";
echo "Vacation: " . $vacation;


?>