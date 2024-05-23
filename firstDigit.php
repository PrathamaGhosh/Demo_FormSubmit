


<?php
$number=76789;
//$number = abs($number);

// Keep dividing the number by 10 until it becomes a single-digit number
while ($number >= 10) {
    $number /= 10;
}
echo (int)$number;
?>