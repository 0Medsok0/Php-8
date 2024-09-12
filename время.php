<?php
$value = date("H");
$timeles = 0;

if ($value >= 23 || $value < 6) {
    $timeles = 1;
    echo $timeles;
} elseif ($value >= 6 &&  $value < 15) {
    $timeles = 2;
} elseif($value >= 15 && $value < 23){
    $timeles = 3;
}

// Проверяем условие $timeles и выводим html
if($timeles = 1):
    ?>
<h1>Заголовок первого типа</h1>
<?php
elseif ($timeles = 2):
    ?>
<h2>Заголовок второго типа</h2>
<?php
else: ?>
<h2>Заголовок третьего типа</h2>
<?php
endif;
?>
