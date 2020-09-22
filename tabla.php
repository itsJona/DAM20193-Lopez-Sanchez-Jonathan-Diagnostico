<?php

    $numero = $_GET['numero'];
    $expresion="1";
    $color="";
    function obtener_factorial($mi_fatorial){
        if($mi_fatorial==1){
            return 1;}
        else{
            return $mi_fatorial * obtener_factorial($mi_fatorial-1);
        }
    }

        echo '<table border="2px" style="background-color:black ;">
            <tr>
                <td style="color: white;" align="center">Iteracion</td>
                <td style="color: white;" align="center">Expresion</td>
                <td style="color: white;" align="center">Valor</td>
            </tr>';
            
        for ($i = 1; $i <= $numero; $i++) {
            $expresion=$expresion.'*'.$i;

          
            if(($i % 2)!=0){
                $color="white";}
            else{
                $color="darkgray";
            }
 
             echo
             '<tr style="background-color: '.$color.';">
 
                 <td style="color: black;" align="center">'.$i.'</td>
 
                 <td style="color: black;" align="left"> '.$expresion.'</td>
                 
                 <td style="color: black;" align="right">'.obtener_factorial($i).' </td>
 
            </tr>';
        }
        echo '</table>';
    

?>