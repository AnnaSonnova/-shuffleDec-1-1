<?php
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suite = [ "♦", "♣", "♥", "♠"];
$deck = [];
for ($i=0; $i < count($suite); $i++) {
    for ( $j = 0; $j < count($num); $j++) {
        $deck[] = $num[$j]." ".$suite[$i];
        
    }
}
$subdec1 = array_slice( $deck, 0, 26);
$subdec2 = array_slice( $deck, 26);

$shuffleDec = [];
for ($k=0; $k<= 25; $k++) {
    $shuffleDec[] = $subdec1[$k];
    $shuffleDec[] = $subdec2[$k];
}
for ($i = 0; $i< count($shuffleDec); $i++){
    echo $shuffleDec[$i];
        
    if (($i+1)%13 ==0 && $i!= 0) {
        echo "<br>";
        
    }
}
echo "<br>";
for ($i = 0; $i< count($deck); $i++){
    echo $deck[$i];
        
    if (($i+1)%13 ==0 && $i!= 0) {
        echo "<br>";
    }
}