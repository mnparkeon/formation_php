<?php

error_reporting(E_STRICT);

define ("CR", "\n");
define ("SEP", "-----------------\n");
define ("CRSEP", "\n-----------------\n");
function echoln($s="")
{
    echo $s . "\n";
}

goto suite;


echo CR;
echo SEP;
$utils = array();
echo "Nb : " . count($utils) . CR;


$user1 = array("user" => "nialon", "pass" => "pass1");
array_push($utils, $user1);
$user2 = array("user" => "bill", "pass" => "pass2");
array_push($utils, $user2);
$user3 = array("user" => "john", "pass" => "pass3");
array_push($utils, $user3);
echo "Nb : " . count($utils) . CR;

$utilisateurs = array(1 => $utils[1], 2 => $utils[2], 3 => $utils[0]);

for ($i=1; $i <= count($utilisateurs); $i++) { 
    foreach ($utilisateurs[$i] as $key => $value)
    echo $key . " " . $value . CR;;
}

function somme($a,$b)
{
    return $a + $b;
}
echo somme(2,3);
echo CR . SEP;
$u = array("u1" => "nom1", "u2" => "nom2");
function affiche_utilisateurs ($users)
{
    
    foreach ($users as $key => $value)
    {
        echo "key: $key, value : $value" . CR;
    }
    
}
affiche_utilisateurs($u);
echo CR . SEP;
function ajoute_utilisateur($id, &$nom, &$users)
{
    // crée utilisateur
    //$user1 = array("nom" => $nom);
    //array_push($users, $user1);
    $users[$id] = $nom;
    $nom= "juliette";
    //affiche utilisateur
    //affiche_utilisateurs($users);
}
$n1 = "rambo";
ajoute_utilisateur("45",$n1, $u);
affiche_utilisateurs($u);
echo $n1;

echo CRSEP;

suite1:
echo "suite";
echo CRSEP;
$couleur = "bleu";
echo CRSEP;
switch ($couleur) {
    case "bleu":
        echo "blue";
        break;
    
    default:
        # code...
        break;
}

suite2:


echoln ("coucou") ;

suite3:

$filename = "exo1.php";
echoln ("file_get_contents :");

$filecontent = file_get_contents($filename);

echo $filecontent;
echoln ("\nfopen + fgets:");
$inputfile = fopen($filename, "r");
if ($inputfile)
{
    while(($line = fgets($inputfile)) != false)
    echoln ("-" . $line);
}
fclose($inputfile);

///////////////////////////
suite4:


$filename = "fichier.csv";

$inputfile = fopen($filename, "r");
$users = array( );
if ($inputfile)
{
    while(($line = fgets($inputfile)) != false)
    {
        //echo ("-" . $line);
        $user = explode(";", $line);
        array_push($users,$user);
        //print_r($user);
    }
}
fclose($inputfile);
print_r($users);

////////////////////////////
suite5:

function cvsToArray($f, &$u, &$h)
{
    $filename = $f;

    $inputfile = fopen($filename, "r");
    $i = 0;
    if ($inputfile)
    {
        while(($line = fgets($inputfile)) != false)
        {
            //echo ("-" . $line);
            $user = explode(";", $line);
            
            //print_r($user);
            if ($i == 0)
            {
                $h = $user;
            }
            else
            {
                array_push($u,$user);
            }
            $i++;
        }
    }
    fclose($inputfile);
//print_r($u);
}
$users = array( );
$headers = array();
cvsToArray("fichier.csv", $users, $headers);
print_r($headers);

$csv = array();
for ($i=0;$i<count($users);$i++)
{
    for ($j=0;$j<count($headers);$j++)
    {
        $csv[$i][chop($headers[$j])] = chop($users[$i][$j]);
    }
}

echo SEP;
//var_dump($csv);
print_r($csv);
echo $csv[0]["nom"];

////////////////////////////
suite6:
echo "coucou";
$filesrc = "exo1.php";
$filedest = "dest.txt";

$content = file_get_contents($filesrc);
$content .= "\nfind de fichier\n";
//echo $content;
file_put_contents($filedest, $content);

$filecontent = file_get_contents($filedest);
echo $filecontent;

//unlink $filedest;


////////////////////////////
suite:
$xml= simplexml_load_file("example.xml") or die("cannot open file");


print_r ($xml->attributes());

print_r ($xml->book->author);

foreach ($xml->book->children() as $child)
{
    echoln ("Fils de book : " . $child->getName());
}
foreach ($xml->book->attributes() as $child)
{
    echoln ("Attribut de book : " . $child->getName());
}
$result = $xml->xpath('//book[genre="Computer"]');
$result = $xml->xpath("//book/pages");
$result = $xml->xpath("count(//book/pages)");
echo "xpath:";
print_r($result);
die();
////////////////////////////
suite7:

$xml = new SimpleXMLElement('<?xml version="1.0"?><document></document>');
$cat = $xml->addChild("Catalog");
$cat->addChild("book1");
$cat->addChild("book2");
$cat->addChild("book3");


echo $xml->asXml();
$xml->asXml("resources/out.xml")
?>
