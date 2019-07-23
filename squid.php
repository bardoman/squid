<?php


$xmlStr=file_get_contents("./simple.xml");

echo "<br>";
echo "Echo file contents as text=>";
echo "<br>";
echo "<br>";
echo $xmlStr;

echo "<br>";
echo "<br>";
echo "Echo XML elements as links=>";
echo "<br>";
echo "<br>";

$xmlElem=simplexml_load_file("./simple.xml") or die("Error: Cannot create object");

echo "<A HREF=",$xmlElem->node[0]->URL[0]->A[0]['HREF'],">",$xmlElem->node[0]->URL[0]->A,"</A><br>";
echo "<A HREF=",$xmlElem->node[1]->URL[0]->A[0]['HREF'],">",$xmlElem->node[1]->URL[0]->A,"</A><br>";
echo "<A HREF=",$xmlElem->node[2]->URL[0]->A[0]['HREF'],">",$xmlElem->node[2]->URL[0]->A,"</A><br>";
echo "<A HREF=",$xmlElem->node[3]->URL[0]->A[0]['HREF'],">",$xmlElem->node[3]->URL[0]->A,"</A><br>";









?> 
