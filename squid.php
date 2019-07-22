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

echo file_exists("./simple.xml");

$xmlStr=file_get_contents("./simple.xml");

echo file_get_contents("./simple.xml");

echo "<br>";

$Nxml=simplexml_load_string($xmlStr) or die("Error: Cannot create object");
print_r($Nxml);

?> 
