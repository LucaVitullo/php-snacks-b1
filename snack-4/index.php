<?php
/*Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
?>



<?php
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus quis eveniet corporis ex obcaecati dolores aut. qui itaque assumenda harum enim corrupti minima id laborum quia nemo, inventore aspernatur.';


$paragrafoNuovo = explode('.', $paragrafo);


for ($i = 0; $i < count($paragrafoNuovo); $i++) {
    echo '<p>' . $paragrafoNuovo[$i] . '</p>';
}
?>