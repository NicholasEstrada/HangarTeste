<?php

$turma = [
    "Pedro" => [5,6,7,10,8],
    "Joao" => [5,8,4,8,9],
    "Maria" => [7,5,3,8,9],
    "Otavio" => [7,4,6,9,5],
    "Marcia" => [5,8,4,9,10],
    "Lidia" => [8,4,6,2,5],
    "Caio" => [7,4,2,8,9],
    "Sophia" => [9,5,8,7,10],
    "Helen" => [6,9,7,10,6],
    "Nicholas" => [5,9,10,6,8],
];

$nom = 0;
$nomes = [];

$soma = 0;

foreach (array_keys($turma) as $index => $key){ 
    $nomes[] = $key;
}

foreach($turma as $aluno){
    foreach($aluno as $nota){
        $soma = $nota + $soma;
    }
    
    $valor = $soma/count($aluno);
    switch($valor){
        case ($valor <5):
            $res = "REPROVADO";
            break;
        case ($valor <= 7):
            $res = "EXAME";
            break;
        case ($valor > 7):
            $res = "APROVADO";
            break;
        default:
             echo "Error Try again Cat";
    }

    echo $nomes[$nom]." ".$res." ".$valor;//$soma/count($aluno);
    echo "<br>";
    $soma = 0;
    $nom++;
}

?>