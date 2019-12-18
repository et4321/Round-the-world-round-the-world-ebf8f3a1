<?php


$geld = ($argv[1]);
$geld = round (($geld*100)/5)*5/100;
define ("GELD" , array (50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05, 0.02, 0.01 ));

 foreach (GELD as $bedrag) {
    $floored = 0;
    if ($geld >= $bedrag
    ) {
        $geld = round ($geld, 2);
        $floored = floor ($geld / $bedrag);
        $geld = round ($geld - ($floored *  $bedrag), 2);
    }

    if ($floored > 0){
        if ($bedrag < 1){
           $cent  = $bedrag * 100;
            echo "$floored * $cent cent".PHP_EOL;
        }
        else{
            echo"$floored * $bedrag euro".PHP_EOL;
        }
    }
}
exit;
?>
