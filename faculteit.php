<?php
$ant = 1;
echo "voer een cijfer in";
$cijfer = readline();
for ($i=1; $i <= $cijfer; $i++) {
 $ant = $i * $ant;
}
echo "De faculteit van $cijfer = " . $ant;
 ?>
