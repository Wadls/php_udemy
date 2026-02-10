<?php
 $x = 10;
 $y =& $x;

 echo "<b>valor de x:</b> $x<br>";
 echo "<b>valor de y:</b> $y<br>";
 
 $y = 15;
 
 echo "<h3>Valor após modificar uma delas</h3>";
 echo "<b>valor de x:</b> $x<br>";
 echo "<b>valor de y:</b> $y<br>";
