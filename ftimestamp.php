<?php
$newdata = "This is test...";
date_default_timezone_set('Asia/Calcutta');
$data = date('Y-m-d-H-i-s');
$file = fopen($date.".txt","w");
fwrite($file,$newdata);
fclose($file);
?>