<?php


$contasCorrentes = [
    '132.635.173-87' => [
        'titular' => 'Joubert',
        'saldo' => 2000
    ],
    '473.829.472-90' => [
        'titular' => 'Gabriela',
        'saldo' => 4000
    ],
    '983.728.376-27' => [
        'titular' => 'Antonella',
        'saldo' => 6000
    ]
];

/*
$contasCorrentes = [
    13263517387 => $conta1, 
    47382947290 => $conta2, 
    98372837627 => $conta3
];
*/

//para add uma conta, basta por o seguinte comando;

$contasCorrentes['473.426.647-37'] = [
    'titular' => 'Juliano',
    'saldo' => 4200
];

    foreach ($contasCorrentes as $cpf => $conta){
        echo $cpf . " = " . $conta ['titular'] . " R$". $conta ['saldo'] . "\n";
    }