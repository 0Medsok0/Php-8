<?php
$months = array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
$file = fopen("months.txt", "w");
foreach ($months as $month) {
  fwrite($file, $month . "\n");
}
fclose($file);
$file = file("months.txt");
$monthsArray = array();
foreach ($file as $month) {
  $monthsArray[] = trim($month);
}
