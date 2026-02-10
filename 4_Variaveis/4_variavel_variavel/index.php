<?php
$a = 'hello';
$$a = "world";
echo "$a {$$a}";
$a = "Eu sou";
$$a = "Bahia";

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";