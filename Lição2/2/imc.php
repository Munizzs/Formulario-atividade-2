<?php

    $p = $_GET['peso'];
    $a = $_GET['altura'];

    $total = $p / ($a*$a);

    if($total < 25){

        echo "Seu IMC é $total <br>Você esta saúdavel!<br><br>";
        echo "<img src='magro.jpg'> ";

    }else {
        echo "Seu IMC é $total<br> Você esta acima do peso!<br><br>";
        echo "<img src='gorda.jpg'> ";
    }

    

?>