<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
?>

<?php
$partite = [
    [
        'Casa' => 'Atlanta hawks',
        'Ospiti' => 'Boston Celtics',
        'PuntiCasa' => '67',
        'PuntiOspiti' => '64'
    ],
    [
        'Casa' => 'Chicago Bulls',
        'Ospiti' => 'Orlando Magic',
        'PuntiCasa' => '90',
        'PuntiOspiti' => '76'
    ],
    [
        'Casa' => 'Los Angeles Lakers ',
        'Ospiti' => 'Utah Jazz',
        'PuntiCasa' => '88',
        'PuntiOspiti' => '79'
    ],
    [
        'Casa' => 'San Antonio Spurs',
        'Ospiti' => 'Golden State Warriors',
        'PuntiCasa' => '81',
        'PuntiOspiti' => '81'
    ],
];
?>
<p>

    <?php
    for ($i = 0; $i < count($partite); $i++) {
        echo  $partite[$i]['Casa'] . ' - ' . $partite[$i]['Ospiti'] . ' ' . $partite[$i]['PuntiCasa'] . '|' . $partite[$i]['PuntiOspiti'] . ' <br>';
    };
    ?>


</p>