<?php

$newdata = "Jyoti ne Study karvu nathi na pade chhe";

$file = fopen("demo2.txt","w") or exit("Unable to open file");

fwrite($file, $newdata);

fclose($file);
?>