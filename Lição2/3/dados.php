<?php

$n = $_POST['nome'];
$s = $_POST['senha'];

if($n != "etecia" || $s != "etecia238"){

    echo "Você não tem permissão de visualizar essa página.";

}else{
    echo "Autenticação  realizada  com  sucesso!";
}

?> 