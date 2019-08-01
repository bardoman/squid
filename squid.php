<?php
session_start();//restarts an old session based on if cookie exists

//$_SESSION["mytest"]="testValue";//if set it will be global on subsequent loads

echo $_SESSION["mytest"],"<br><br>";

$CookieInfo = session_get_cookie_params();

print_r($CookieInfo,FALSE);

echo "<br><br>";

/*
$jsonStr = file_get_contents("./squid.json");
$json = json_decode($jsonStr);
  print_r($json);

  echo "<br><br>";

  var_dump($json);

   echo "<br><br>";
*/

$xmlElem=simplexml_load_file("./squid.xml") or die("Error: Cannot create object");
//echo "json_xmlElem=>",json_encode($xmlElem);
 // print_r($xmlElem);

  echo "<br><br>";

foreach($xmlElem->node as $node)
{
 echo "Node name=",$node[name],"<br>";
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

$testAray;

foreach($xmlElem->logicGroup as $logicGroup)
{
    echo "logicGroup name=",$logicGroup[name],"<br>";

    foreach($logicGroup->state as $state)
    {
        echo "state name=", $state[name],"<br>"; 

         foreach($state->var as $var)
         {  
             $key=(string) $var[key];
             $val=(string) $var[value];
             echo "var name=",$key," value=", $val,"<br>";
            
             $testAray[$key]=$val;            
         }
         echo "<br>";

         foreach($state->oper as $oper)
         {  
             $val=(string) $oper[value];
             echo "oper value=", $val,"<br>";
                     }
         echo "<br>";
    }
    echo "<br>";
}

print_r($testAray,  FALSE );

  echo "<br><br>";
/*
echo "json_testAray=>",json_encode($testAray);

  echo "<br><br>";

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

echo "json_arr=>",json_encode($arr);
*/
?> 
