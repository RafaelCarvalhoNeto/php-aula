<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <?php
        // para criar uma variável no PHP basta utilizar $ e o nome da variável que deseja em seguida
        $titulo = "Primeira Aula de PHP";
    ?>

    <h1>
        <?php
            // para exibir algo na tela com PHP
            echo $titulo;
        ?>
    </h1>

    <hr>
    <h2>Condicionais</h2>
    <p>IL / ELSE</p>
    <p>Crie uma condição que valide ser uma pessoa pode votar ou não<. De forma que se a pessoa tiver a idade entre 16 e 17, iremos mostrar na tela Voto facultativo, caso contrário, se for o maior de idade iremos mostrar na tela voto obrigatório, e caso for menor de 16 ou maior que 64 não vota<p>

    <?php

        function podeVotar($idadeEleitor){
            if($idadeEleitor >= 16 && $idadeEleitor < 18 || $idadeEleitor > 70){
                return "Voto facultativo";
            }else if($idadeEleitor >= 18 && $idadeEleitor <=70){
                return "Deve votar";
            }else{
                return "Não vota";
            }
        }

    ?>

    R: Foi criado no código a função podeVotar e foi informado como parâmetro o valor 17, como resultado da função tivemos: <?php echo podeVotar (17); ?>

    <hr>
    <h2>SWITCH CASE</h2>

    <p>Valide se um número é 0 e retorne que é igual a 0, se é 1 e retorne que é igual a 1, ou se é 2 e retorno que é igual a 2. Caso contrário retornque o número é maior que 2. Utilizando o Switch case</p>

    <?php

        function validaNumero($i){
            switch ($i) {
                case 0:
                    echo "i igual 0";
                    break;
                case 1:
                    echo "i igual 1";
                    break;
                case 2:
                    echo "i igual 2";
                    break;
                default:
                    echo "qualquer número maior que 2";
                    break;
            }
        }
    ?>

    R: Foi criado no código a função validaNumero que foi informardo como parâmetro o número 2, como retorno da função tivemos: <br> <?php echo validaNumero(2)?>

    <p>Crie uma função que receber o gênero de uma pessoa, onde ela poderá informar Masculino ou Feminino, se informar Masculino iremos retornar a mensagem Gênero informado foi masculino, se informar Feminino iremos retornar a mensagem Gênero informado foi feminino, caso contrário< iremos retornar Outros. Utlizando Switch<p>

    <?php

        function validaGenero($x){
            switch ($x) {
                case "masculino":
                    echo "Masculino";
                    break;
                case "feminino":
                    echo "Feminino";
                    break;
                default:
                    echo "Outros";
                    break;
            }
        }
    ?>

    <br>
    Retorne a resposta: <?php echo validaGenero("feminino")?>

    <hr>
    <h1>Arrays</h1>

    <p>Array Simples</p>

    <?php
        // declarando array vazio
        $animais = [];
        // array simples só tem valores, não nos preocupamos em controlar suas posições.
        $animais = ["Leão", "Girafa", "Cachorro", "Gato", 1, true];

        // uma forma de debugar variáveis no php para saber os tipos, valores, tamanho dos valores.
        echo "<pre>";
            var_dump($animais);
        echo "</pre>";
    ?>

    <hr>

    <h2>Array Associativo</h2>

    <?php
        // o array associativo nos dá a possibilidade de atribuir valores as nossas posições
        $usuario = [
            "nome" => "Victor",
            "email" => "vtorres@digitalhouse.com",
            "senha" => "123456"
        ];

        echo "<pre>";
        var_dump($usuario);
        echo "</pre>";

        // montando frase pegando uma posição do array sem percorrer ele todo
        echo "O nome do usuário é ". $usuario["nome"]
    ?>
    <br>
    <hr>

    <h2>Array de arrays</h2>

    <?php
        $listaDeUsuarios = [
            "usuario1" => [
                "nome" => "Victor",
                "email" => "vtorres@digitalhouse.com",
                "senha" => "123456"
            ],
            "usuario2" => [
                "nome" => "Marcelo",
                "email" => "mdiament@digitalhouse.com",
                "senha" => "789101"
            ],
            "usuario3" => [
                "nome" => "Rafael",
                "email" => "mdiament@digitalhouse.com",
                "senha" => "789101"
            ],
            "usuario4" => [
                "nome" => "Junior",
                "email" => "mdiament@digitalhouse.com",
                "senha" => "789101"
            ]
            
        ];


        // echo var_dump($listaDeUsuarios[$usuario]);
        echo $listaDeUsuarios["usuario1"]["nome"]."<br>";
        echo "<pre>";
        var_dump($listaDeUsuarios);
        echo "</pre>";
    
        $i=0;
       
        while ($i<count($listaDeUsuarios)){
            $number = $i+1;
            foreach($listaDeUsuarios["usuario$number"] as $indice => $valor){
                echo $valor."<br>";
            }
            $i++;
        }
        foreach($listaDeUsuarios["usuario1"] as $indice => $valor){
            echo $indice;
        }
        foreach($listaDeUsuarios as $indice => $valor){
            echo $indice;
        }
        
        echo"<h2>Monta tabela</h2>";

    ?>
    <hr>
    <table>

        <tr>
            <th></th>
            <?php foreach($listaDeUsuarios["usuario1"] as $indice => $valor){?>
            <th><?php echo $indice;?></th> <?php } ?>
        </tr>
        <tr>
            <?php
                $i=0;
                while ($i<count($listaDeUsuarios)){
                    echo "<tr>";
                    $number = $i+1;
                    echo "<th>usuario$number</th>";
                    foreach($listaDeUsuarios["usuario$number"] as $indice => $valor){
                        echo "<td>".$valor."</td>";
                    }
                    $i++;
                    echo "<tr>";
                }
        
            
            
            ?>
            



        </tr>
    
    </table>
    

    

</body>
</html>