<?php

require_once 'Personnage.php';

$perceval = new Personnage('perCEval', 'Chevalier', 100, 40);
$perceval->cri();
echo $perceval->getProfession();


var_dump($perceval);
die;

