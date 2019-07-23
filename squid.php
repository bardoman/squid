<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Buckwheat</to>
<from>Bardoman</from>
<heading>whodat?</heading>
<body>Don't sneeze on the bee's knees</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);

echo "<br>";
echo "1";
echo "<br>";

echo file_exists("./simple.xml");

$xmlStr=file_get_contents("./simple.xml");

echo file_get_contents("./simple.xml");

echo "<br>";
echo "2";
echo "<br>";

$Nxml=simplexml_load_string($xmlStr) or die("Error: Cannot create object");
print_r($Nxml);

echo "<br>";
echo "3";
echo "<br>";

$Nxml=simplexml_load_file("./simple.xml") or die("Error: Cannot create object");

echo $Nxml->to . "<br>";
echo "4";
echo "<br>";
echo $Nxml->from . "<br>";
echo "5";
echo "<br>";
echo $Nxml->heading . "<br>";
echo "6";
echo "<br>";
echo $Nxml->body . "<br>";
echo "7";
echo "<br>";
echo $Nxml->URL->A . "<br>";
echo "8";
echo "<br>";

foreach($Nxml->URL[0]->A->attributes() as $a => $b) {
    echo $a,'="',$b,"\"\n";
    echo "<br>";
    echo "<A HREF=",$b,">Proverbs</A>";
}



//echo $xml->book[0]['category'] . "<br>";







?> 
