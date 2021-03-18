<?php


header('Content-Type: text/plain');
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Expires: -1");
exec('echo "G TOGGLE" | nc -w 1 localhost 4532');  



?>
