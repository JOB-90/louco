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

$contasCorrentes = [
    $conta1, 
    $conta2, 
    $conta3
];

//para cada (foreach), uma das contas correntes ($contasCorrentes), como (as) conta ($conta). 
foreach ($contasCorrentes as $conta){
    echo $conta ['titular']. "\n";
}