﻿<xml>
<message>bonjour
<?php
echo "bonjour\n";
?>
</message>
<?php

define ("CR", "\n");
define ("SEP", "-----------------\n");


define ("C", 3.14159265358979323846264);
$i = "bonjour";
$j = 2;
$k = 3.1415926535897932384626450288;
$l = true;

$m = $j + $k;
$n = $i + $j;
$o = $i + $l;
/*
echo "bonjour $j fois, $i\n";
print_r ("bonjour 2\n");
var_dump("bonjour 3\n");
*/
echo "i = $i\n";
echo "j = $j\n";
echo "k = $k\n";
echo "l = $l\n";
echo "m = $m\n";
echo "n = $n\n";
echo "o = $o\n";
echo $i . $j . "\n";
// var_dump($i . $j);
echo "pi = " . C . "\n";
echo "bonjour $j fois, $i\n";

$tab = array (1,2,3);
var_dump($tab);
for ($i=0; $i < count($tab); $i++) { 
    echo $tab[$i];
}
echo CR;
echo SEP;
// tableau associatif
$utilisateurs = array("nom" => "niâlon", "prenom" => "michel");
echo $utilisateurs["nom"];

echo CR;
echo SEP;
echo "exo8" . CR . SEP;

$utils = array();
echo "Nb : " . count($utils) . CR;


$user1 = array("nom" => "nialon", "michel");
array_push($utils, $user1);
echo "Nb : " . count($utils) . CR;

?>

</xml>