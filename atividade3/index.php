<?php

    $nome = $_POST['nome'];
    $CPF = $_POST['cpf'];
    $sexo = $_POST['select'];
    $idade = $_POST['idade'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    echo "CADASTRO REALIZADO!";
    echo "<br><br>Nome: $nome";
    echo "<br>CPF: $CPF";
    echo "<br>Sexo: $sexo";
    echo "<br>Idade: $idade";
    echo "<br>Altura: $altura";
    echo "<br>Peso: $peso KG";

    $resultado = ($peso / ($altura * $altura)) * 10000;
    if ($resultado <= 10.5) {
        echo "<br><br>Resultado do IMC: Morto";
    }else if ($resultado >= 10.5 && $resultado <= 18.5) {
        echo "<br><br>Resultado do IMC: Magreza";
    } else if ($resultado > 18.6 &&  $resultado < 24.9) {
        echo "<br><br>Resultado do IMC: Normal";
    } else if ($resultado > 25.0 && $resultado < 29.9){
        echo "<br><br>Resultado do IMC: Sobrepeso";
    } else if ($resultado > 30.0){
        echo "<br><br>Resultado do IMC: Obesidade";
    }

    
?>