<?php

require_once('menu.php');

$apple = new Menu('りんご', 300, '../img/apple.jpg');
$pineapple = new Menu('パイナップル', 1000, '../img/pineapple.jpg');
$peach = new Menu('もも', 500, '../img/peach.jpg');
$grape = new Menu('ぶどう', 500, '../img/grape.jpg');
$jam_set = new Menu('ジャム2個セット', 2000, '../img/jam.jpg');
$smoothie_set = new Menu('スムージー3個セット', 1500, '../img/smoothie.jpg');

$menus = array($apple, $pineapple, $peach, $grape, $jam_set, $smoothie_set);

?>