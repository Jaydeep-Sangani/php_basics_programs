<!-- md5 – Calculate the md5 hash of a string -->
<?php
$data = "demo";
$val1 = rand(5,10);
$val2 = rand(2,22);

$pwd2 = md5($data);
$pwd3 = md5($val1.$data.$val2);
echo $pwd3;
echo $pwd2;
?>