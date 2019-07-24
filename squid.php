<?php

/*
$xmlStr=file_get_contents("./squid.xml");

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
*/
$xmlElem=simplexml_load_file("./squid.xml") or die("Error: Cannot create object");
/*
echo "<A HREF=",$xmlElem->node[0]->URL[0]->A[0]['HREF'],">",$xmlElem->node[0]->URL[0]->A,"</A><br>";
echo "<A HREF=",$xmlElem->node[1]->URL[0]->A[0]['HREF'],">",$xmlElem->node[1]->URL[0]->A,"</A><br>";
echo "<A HREF=",$xmlElem->node[2]->URL[0]->A[0]['HREF'],">",$xmlElem->node[2]->URL[0]->A,"</A><br>";
echo "<A HREF=",$xmlElem->node[3]->URL[0]->A[0]['HREF'],">",$xmlElem->node[3]->URL[0]->A,"</A><br>";

echo "<br>";
echo "<br>";
echo "Echo XML elements with loop=>";
echo "<br>";
echo "<br>";

foreach($xmlElem->node as $node)
{
    echo "<A HREF=",$node->URL->A[0]['HREF'],">",$node->URL->A,"</A><br>";
}

echo "<br>";
echo "<br>";
echo "Echo all XML elements with loop=>";
echo "<br>";
echo "<br>";
*/

foreach($xmlElem->node as $node)
{
 echo "Title=",$node->name,"<br>";
  echo "Links=",$node->links,"<br>";
 echo "Task priority=",$node->task->priority,"<br>";
  echo "Task startDate=",$node->task->startDate,"<br>";
   echo "Task endDate=",$node->task->endDate,"<br>";



    foreach($node->URL as $url)
    {
        echo "<A HREF=",$url->A[0]['HREF'],">",$url->A,"</A><br>";
    }
    echo "<br><br>";
}










?> 
