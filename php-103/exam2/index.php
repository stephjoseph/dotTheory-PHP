<?php
function calculate_bmi_english($heightInches,$weightPounds){
 
   $index = 0; // initialize BMI variable
   if($heightInches !=0 && $weightPounds !=0) // check if height and weight are not 0
       $index = round($weightPounds/($heightInches*$heightInches)* 703,2); // compute for BMI and store the result in $index
 
   $bmi=""; // initialize bmi variable
   if ($index < 18.5) { // check if BMI is less than 18.5
       $bmi="underweight - BMI : " . $index; // if true, set $bmi to "underweight" and concatinate the BMI
   } else if ($index < 25) { // check if BMI is between 18.5 and 25
       $bmi="normal - BMI : ". $index; //if true, set $bmi to "normal" and concatinate the BMI
   } else if ($index < 30) { // check if BMI is between 25 and 30
       $bmi="overweight - BMI : " . $index; // if true, set $bmi to "overweight" and concatinate the BMI
   } else { // check if BMI is greater than 30
       $bmi="obese - BMI : " .$index; // if true, set $bmi to "obese" and concatinate the BMI
   }
   echo $bmi; // display the $bmi string to the user
}
calculate_bmi_english(69,150);
?>
