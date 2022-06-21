<?php

$sentence1 = 'The quick brown fox.';
$sentence2 = 'The quick brown fox jumped over the lazy dog.';
$sentence3 = '2,543.12';

echo substr($sentence1, 0, 3) . '<br>';
echo  str_replace('jumped over the lazy dog.', 'jumps', $sentence2) . '<br>';
echo str_replace(',', '',$sentence3);



?>