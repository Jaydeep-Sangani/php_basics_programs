<?php
$list =  "Sangani, JD ";
$file = fopen("text.csv","w");
fputcsv($file,explode(',',$list));
fclose($file); 
?>