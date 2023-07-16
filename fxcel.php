<!-- ==== -->
<?php $file = fopen("text.csv", "r");
print_r(fgetcsv($file));
fclose($file); ?>