<?php
/*Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
?>

<?php
$array = [];
$loop = 0;
while (count($array) < 15) {

    $random = rand(1, 30);
    $loop++;
    if (!in_array($random, $array)) {
        $array[] = $random;
    }
}

echo ('<pre>');
var_dump($array);
echo ('</pre>');
echo ('numero ripetuto ' . $loop . ' volte');
?>