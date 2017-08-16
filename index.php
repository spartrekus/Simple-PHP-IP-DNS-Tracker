
<h1> ALTERNATIVE FOR IP DNS TRACKER (freedom and completely free of charge using your apache website) </h1>

<?php

$externalContent = file_get_contents('http://checkip.dyndns.com/');
preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
$externalIp = $m[1];

$mytime = date("h:i:sa");
$mydate = date("Y/m/d");

$ip=$_SERVER['REMOTE_ADDR'];

$file = fopen("123973972733.ip","a");
 fwrite($file, "TIME/DATE: ");
 fwrite($file, $mydate );
 fwrite($file, " "  );
 fwrite($file, $mytime );
 fwrite($file, ", EXTIP: " );
 fwrite($file, $externalIp );
 fwrite($file, ", IP: " );
 fwrite($file,$ip);
 fwrite($file, "\n" );
fclose($file);
?> 


