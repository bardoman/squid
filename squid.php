<?php

$xmlElem=simplexml_load_file("./squid.xml") or die("Error: Cannot create object");

foreach($xmlElem->node as $node)
{
 echo "Title=",$node->name,"<br>";
  echo "Comment=",$node->comment,"<br>";
  echo "Links=",$node->links,"<br>";

  if ( $node->task->asXML()==FALSE) {
    print "No task";
  }
  else
  {
   echo "Task priority=",$node->task->priority,"<br>";
   echo "Task startDate=",$node->task->startDate,"<br>";
   echo "Task endDate=",$node->task->endDate,"<br>";
  }

  echo "<br>";

    foreach($node->URL as $url)
    {
        echo "<A HREF=",$url->A[0]['HREF'],">",$url->A,"</A><br>";
    }
    echo "<br><br>";
}
?> 
