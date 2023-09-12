<?php
$integerVariable = 10; 
$floatVariable = 3.14; 
$stringVariable = "Primo esercizio php"; 
$booleanVariable = true;

var_dump ($integerVariable) ; 
var_dump ($floatVariable)  ;
var_dump ($stringVariable)  ;
var_dump ($booleanVariable) ;

$text = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè";
$text6 = "hai";
$text7 = "bevuto";
$text8 = "tutto";

echo $text ." ". $text2 ." ". $text3 ." ". $text4 ." ". $text5 ." ". $text6 ." ". $text7 ." ". $text8;

$words1 = [ 'una', 67,'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo', [ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ]; 
$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];
$words3 = [ 'di'];

$results = $words1[6][3][1][1] ." ". $words1 [6][3][0] ." ". $words3 [0] ." ". $words1 [6][3][1][0] ." ". $words3 [0] ." ". $words2 ['elemento2'] ." ". $words1 [2] ." ". $words1 [4] ." ". $words1 [6] [4] ." ". $words1 [6][5] ." ". $words1 [6][3][1][2][2][1] ." ". $words1 [6][3][1][2][0] ." ". $words1 [6] [0] ." ". $words2 ['elemento3'][2] ." ". $words1 [6][3][1][2][1] ." ". $words1 [7] ." ". $words1 [6][3][1][2][2][0] ." ". $words1[6][1] ." ". $words2 ['elemento3'][1];

var_dump ($results);

$x = 10; 
$y = 20; 
$z = "20"; 
$w = 10;

var_dump($x < $y); 
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);

$corsoHackademy = [ "docenti" => ["giovanni", "emanuele"], "studenti" => ["giovanni", "franco", "coppola"], "argomenti" => ["html", "css", "bootstrap", "javascript", "php"], ];
$corsoHackademy2 = ["Sono", "e", "sto", "studiando"];

$corso = $corsoHackademy2 [0] ." ". $corsoHackademy ["studenti"] [0] ." ". $corsoHackademy2 [1] ." ". $corsoHackademy2 [2] ." ". $corsoHackademy2 [3] ." ". $corsoHackademy ["argomenti"] [4];

var_dump($corso);
