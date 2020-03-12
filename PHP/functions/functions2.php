
<?php

$time = time();
echo $time;
for($i = 0; $i < 1000; $i++) {
     $a = 0;
} 
$outherTime = time();
echo "\n, $outherTime";
$dif = $outherTime - $time;
echo "\n, $dif";
?>