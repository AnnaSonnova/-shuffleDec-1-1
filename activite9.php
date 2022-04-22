<?php
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suite = [ "♦", "♣", "♥", "♠"];
$deck = [];
for ($i=0; $i < count($suite); $i++) {
    for ( $j = 0; $j < count($num); $j++) {
        $deck[] = $num[$j]." ".$suite[$i];
        
    }
}
echo ("<pre>");
print_r($deck);
echo ("<pre>");
$subdec1 = array_slice( $deck, 0, 26);
$subdec2 = array_slice( $deck, 26);

print_r ($subdec1);
print_r ($subdec2);
$shuffleDec = [];
for ($k=0; $k<= 25; $k++) {
    $shuffleDec[] = $subdec1[$k];
    $shuffleDec[] = $subdec2[$k];
}
print_r ($shuffleDec);