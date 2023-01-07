<?php
function linha ($semana)

{
    echo "<tr>";

for ($i = 0; $i <=6; $i++){
        if (isset($semana[$i])){

            echo "<td> {$semana[$i]} </td>";
                }else{

            echo "<td></td>";
    }

    }
         echo "</tr>";

}
    function calendario ()

    {
        $dia = 1;
        $semana = array();
        while ($dia <= 31) {
            array_push($semana, $dia);
            
            if (count($semana) ==7) {
                linha($semana);
                $semana = array();

            }
            $dia++;
        }
    linha($semana);

    }

?>

<table border="5">

<tr>
    
<th>Domingo</th>
<th>Segunda-feira</th>
<th>Terça-feira</th>
<th>Quarta-feira</th>
<th>Quinta-feira</th>
<th>Sexta-feira</th>
<th>Sábado</th>

</tr>

<?php calendario(); ?>

</table>