<?php
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suite = [ "♦", "♣", "♥", "♠"];
$deck = [];
for ($i=0; $i < count($suite); $i++) {
    for ( $j = 0; $j < count($num); $j++) {
        $deck[] = $num[$j]." ".$suite[$i];
        
    }
}
print_r($deck[]) ;
        echo "<br>";