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
?> 
