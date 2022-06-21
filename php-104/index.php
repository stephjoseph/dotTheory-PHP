<?php 


// numberic array
$shoeBrands = array("Nike", "Adidas", "Puma", "Converse");


//associative array
$nbaPlayers = array("Lebron James" => "Lakers", "Derrick Rose" => "Knicks", "Stephen Curry" => "Warriors");


$fastFoodChains = array(
    "Jollibee" => array(
        "branches" => 12,
        "managers" => 15,
        "employees" => 50
    ),

    "McDonalds" => array(
        "branches" => 18,
        "managers" => 10,
        "employees" => 70
    ),

    "KFC" => array(
        "branches" => 8,
        "managers" => 9,
        "employees" => 40
    ),
);

$thirdShoeBrand = "The 3rd brand is: " . $shoeBrands[2];
$stephCurryTeam = "The team of Stephen Curry is: " . $nbaPlayers["Stephen Curry"];
$leastManager = "The Chain with the least Managers: KFC = " . $fastFoodChains["KFC"]["managers"];
$mostEmployees = "The Chain with the most Employees: Jollibee = " . $fastFoodChains["Jollibee"]["employees"];

print_r($thirdShoeBrand);
echo "<br>";
print_r($shoeBrands);
echo "<br>";
print($stephCurryTeam);
echo "<br>";
print_r($nbaPlayers);
echo "<br>";
print_r($leastManager);
echo "<br>";
print_r($mostEmployees);
echo "<br>";
print_r($fastFoodChains);

?>