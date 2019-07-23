<?php


$xmlStr=file_get_contents("./simple.xml");
print_r($xml);

echo "<br>";
echo "1";
echo "<br>";

echo $xmlStr;

echo "<br>";
echo "2";
echo "<br>";

$Nxml=simplexml_load_file("./simple.xml") or die("Error: Cannot create object");
print_r($Nxml);

echo "<br>";
echo "3";
echo "<br>";

echo "<A HREF=",$Nxml->node[0]->URL[0]->A[0]['HREF'],">",$Nxml->node[0]->URL[0]->A,"</A><br>";
echo "<A HREF=",$Nxml->node[1]->URL[0]->A[0]['HREF'],">",$Nxml->node[1]->URL[0]->A,"</A><br>";
echo "<A HREF=",$Nxml->node[2]->URL[0]->A[0]['HREF'],">",$Nxml->node[2]->URL[0]->A,"</A><br>";
echo "<A HREF=",$Nxml->node[3]->URL[0]->A[0]['HREF'],">",$Nxml->node[3]->URL[0]->A,"</A><br>";









?> 
