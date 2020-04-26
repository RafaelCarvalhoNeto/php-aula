<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>    

    <h1>Testando aula</h1>
    
    <?php

        $diaEnsolarado = true;
        if ($diaEnsolarado == true) {
            echo "Vamos para a praia!";
        } else {
            echo "Cuidado com a chuva";
        }
    
    ?>
    <br>
    <?php

        $idade = 25;
        if ($idade < 16){
            echo "Não pode votar";
        } else if ($idade ==16 && $idadae==17) {
            echo "Voto opcional";
        } elseif ($idade>=18){
            echo "Voto obrigatório";
        }   
    ?>
    <br>
    <br>
    <?php
        $numero1 = 32;
        $numero2 = 58;

        $maior = $numero1 > $numero2 ? $numero1 : $numero2;
        echo $maior;
    ?>

    <hr>

    <h1>FOR</h1>

    <?php
        $lista = ["pao", "Leite", "Suco", "Bolacha"];
        $lista[] = "Sabao";
        echo "Lista de compras <br>";
        for ($i=0; $i<count($lista); $i++){
            echo $lista [$i]."<br>";
        }
    
    ?>

    <hr>
    <h1>WHILE E DO-WHILE</h1>

    <?php

        $array = ["Opa", "Olá", "Eu sou o Vinicíus", "chega"];
        $i=0;
        shuffle($array);
        while($array[$i]!="chega"){
            echo $array[$i]."<br>";
            $i++;
        }
    
    ?>
    <br>
    <br>
    <?php

        $array = ["Opa", "Olá", "Eu sou o Vinicíus", "chega"];
        $i=0;
        do{
            echo $array[$i]."<br>";
            $i++;
        }
        while($array[$i]!="chega");

    ?>

    <?php
        $quantidade = 5;
        while ($quantidade >0){
            echo $quantidade."<br>";
            $quantidade--;
        }
    
    ?>
    <hr>
    <h1>Keyowrds</h1>
    
    <?php
        $i=0;
        for($i=0; $i<5;$i++){
            if($i==3){
            break;
            }
            echo "valor do i:".$i; 
        }
    ?>

    <?php
        $i=0;
        for($i=0; $i<5;$i++){
            if($i==3){
            continue;
            }
            echo "valor do i:".$i; 
        }
    ?>

    <hr>
    <h1>foreach</h1>

    <?php?>

    <h1>OPERADORES TERNÁRIO!</h1>
    <?php
    
        $ano = $_GET["ano"];
        $idade = 2020 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos <br>";
        $tipo = ($idade>=18 && $idade<65)?"Vota":"Não vota"; 

        echo "Seu voto é $tipo!";
    
    
    ?>


        <br>
        <h2>NOVO TESTE IF</h2>

        <?php


                $idade = ["y"];
                if ($i < 16){
                    $tipoVota = "não vota";
                } else{
                    if(($i>=16 && $i<18)||$i>65){
                        $tipoVota = "opcicional";
                    }
                    else{
                        $tipoVota = "obrigatóro";
                    }
                }

            echo "Essa pessoa tem o tipo de voto ".podeVotad(15);       
        
        ?>



    

</body>
</html>