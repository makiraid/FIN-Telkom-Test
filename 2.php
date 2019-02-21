<?php
$number = '01448920394027742900';
if(ctype_digit($number) && strlen($number) == 20) {
  $number = substr($number, 0, 4) .'-'.
            substr($number, 4, 4) .'-'.
            substr($number, 8, 4) .'-'.
            substr($number, 12, 4) .'-'.
            substr($number, 16, 4);
echo $number;
}