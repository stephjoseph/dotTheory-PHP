<?php 

//for loop

for($i = 0; $i < 10; $i++) {
    if ($i == 4) {
        echo "The quick brown fox jumps over a lazy dog but the dog woke up and barked at the fox" . "<br>";
    } else {
        echo "The quick brown fox jumps over a lazy dog" . "<br>";
    }
}



$i = 0;

//while loop
while ($i < 10) {
    if ($i == 4) {
        echo "The quick brown fox jumps over a lazy dog but the dog woke up and barked at the fox" . "<br>";
    } else {
        echo "The quick brown fox jumps over a lazy dog" . "<br>";
    }
    $i++;
}

$j = 0;

//do.. while loop
do {
    if ($j == 4) {
           echo "The quick brown fox jumps over a lazy dog but the dog woke up and barked at the fox" . "<br>";
       } else {
           echo "The quick brown fox jumps over a lazy dog" . "<br>";
       }
       $j++;
   } while ($j < 10);

?>