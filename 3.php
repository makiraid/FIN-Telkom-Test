<?php
$a = 3;
$b = 5;

print "Asli : \r\n <br> $a,$b";
print "<br>";

list($a, $b) = array($b, $a); 
print "Ubah : \r\n <br> $a,$b";