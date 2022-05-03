<?php
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/
?>
<?php
$Alunni = [
    [
        'Nome' => 'Gioia',
        'Cognome' => 'Ascari',
        'Voti' => [8, 8, 9, 7],
    ],
    [
        'Nome' => 'Lucio',
        'Cognome' => 'Melis',
        'Voti' => [10, 8, 8, 7],
    ],
    [
        'Nome' => 'Erik',
        'Cognome' => 'Sioxx',
        'Voti' => [7, 8, 10, 9],
    ],
];




for ($i = 0; $i < count($Alunni); $i++) {
    $sum = array_sum($Alunni[$i]["Voti"]) / count($Alunni[$i]["Voti"]);
    echo  $Alunni[$i]['Nome'] . ' - ' . $Alunni[$i]['Cognome'] . '-' . $sum . '<br>';
};


?>