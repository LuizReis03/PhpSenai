<?php

    $nome = $_POST['nome'];
    $valorComissao = $_POST['valorComissao'];
    $salario = 1500;

    if ($valorComissao <= 15000) {

        $porcentagem = $valorComissao * 0.03;
        $salario += $porcentagem;
        echo "$nome sua comissão esse mês foi de R$$porcentagem.";

    }elseif ($valorComissao > 15000) {

        $porcentagem = $valorComissao * 0.05;
        $salario += $porcentagem;
        echo "$nome sua comissão esse mês foi de R$$porcentagem.";

    }

    echo "<br><br>Salário final de: R$$salario";
    
?>