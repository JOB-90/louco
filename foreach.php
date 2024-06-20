<?php

/*
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
*/

//as contas de cimanão estão sendo utilizadas, então posso pegar as informaçôes e por nas variaveiscontas de baixo.

$contasCorrentes = [
    $conta1 = [
        'titular' => 'Joubert',
        'saldo' => 2000
    ],
    $conta2 = [
        'titular' => 'Gabriela',
        'saldo' => 4000
    ],
    $conta3 = [
        'titular' => 'Antonella',
        'saldo' => 6000
    ]
];

// caso eu mude o indice, não é precisomudar nada no foreach, ele pucha da mesma forma.

$contasCorrentes = [
    13263517387 => $conta1, 
    47382947290 => $conta2, 
    98372837627 => $conta3
];

//para cada (foreach), uma das contas correntes ($contasCorrentes), como (as) conta ($conta). 
/*foreach ($contasCorrentes as $conta){
    echo $conta ['titular']. "\n";
}*/

//agora se eu quiser pegar o CPF, no caso o indice, basta eu por o foreach da seguinte forma:

    foreach ($contasCorrentes as $cpf => $conta){
        echo "A conta corrente cujo CPF: " . $cpf . ", pertense a " . $conta ['titular'] . 
        ". \n O qual tem a seguinte quantia em conta: R$" . $conta ['saldo'] . "\n";
    }