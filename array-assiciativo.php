<?php

$conta1 = [
    'titular' => 'Joubert',
    'saldo' => 2000
];

$conta2 = [
    'titular' => 'Gabriela',
    'saldo' => 4000
];

$conta3 = [
    'titular' => 'Antonella',
    'saldo' => 6000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . "\n";
};