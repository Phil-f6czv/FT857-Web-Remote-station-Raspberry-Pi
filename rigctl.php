<?php


header('Content-Type: text/plain');
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Expires: -1");

 $q = Preg_Replace('/[^- a-z0-9]/i', '', $_GET['q']); 
 $q = $_GET['q']; 
// exec('echo "$q" | nc - w 1 localhost 4532'); 
system("rigctl -m 2 -- $q"); 


?>
