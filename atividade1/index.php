<?php

    $horasTrabalhadas = $_POST['horasTrab'];
    $horasExtra = $_POST['horasExtra'];
    $valeTransporte = $_POST['select'];
    $bruto = 0.0;
    $liquido = 0.0;

    if ($valeTransporte == 'sim') {
        $bruto = ($horasTrabalhadas * 10.00) + ($horasExtra * 15.00);
        $desconto = $bruto * 0.10;
        $descontoVT = $bruto * 0.06;
        $liquido = $bruto - $desconto - $descontoVT;
    }else{
        $bruto = ($horasTrabalhadas * 10.00) + ($horasExtra * 15.00);
        $desconto = $bruto * 0.10;
        $liquido = $bruto - $desconto - $descontoVT;
    } 
    
    echo "Seu salário bruto é de: R$$bruto<br><br>";
    echo "Seu salário liquído é de: R$$liquido"
    
?>