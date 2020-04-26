<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <h1>Loopings</h1>
    <h2>Loops - for</h2>
    <p> Cria um loop que exiba os números de 1 a 10 utilizando a estrutura for:</p>

    <?php
        for ($i=0;$i<=10;$i++){
            echo $i."<br>";
        }
    
    ?>

    <p>Criar uma sequencia de números pares:</p>


    <?php
        for ($i=1; $i <=10;$i++){
            if ($i % 2 ==0){
                echo $i."<br>";
            }
        }
    ?>

    <hr>

    <h2>While</h2>
    <br>

    Cria um loop que exiba os números de 1 a 10 utilizando o while <br>

    <?php
        $a = 1;
        while($a<=10){
            echo $a."<br>";
            $a++;
        }
    ?>

    <p>Sequencia decrescente:</p>
    
    <?php
        $a = 10;
        while($a>=1){
            echo $a."<br>";
            $a--;
        }
    ?>

    <hr>
>
    <h2>DO WHILE</h2>

    <?php
        $i=1;
        do{
            echo $i."<br>";
            $i++;
        }
        while ($i<=10);
    ?>

    <p>DO WHILE DECRESCIMO</p>

    <?php
        $i=10;
        do{
            echo $i."<br>";
            $i--;
        }
        while ($i>=1);
    ?>
    
    <hr>
    <h2>Loos percorrendo arrays</h2>

    <p>Percorra um array utilizando for</p>
    <code>$animais = ["Gato", "Cachorro", "Leão", "Girafa"];</code><br>
    <br>

    <?php
        $animais = ["Gato", "Cachorro", "Leão", "Girafa"];
    ?>
    <?php
        // percorrendo o array de animais com o loop for
        echo count($animais)."<br>";
        for ($i=0;$i<count($animais);$i++){
            echo $animais[$i]."<br>";
        }
    ?>

    <hr>
    <h2>While - Percorra um array utilizando</h2>
    <code>$animais = ["Gato", "Cachorro", "Leão", "Girafa"];</code><br>
    <br>

    <?php
        $i=0;
        while($i < count($animais)){
            echo $animais[$i]."<br>";
            $i++;
        }
    ?>

    <hr>
    <h2>DO WHILE</h2>

    <?php
        $i=0;
        do{
            echo $animais[$i]."<br>";
            $i++;
        }
        while($i < count($animais));
    ?>

    <hr>
    <h2>FOREACH</h2>
    <?php
        foreach($animais as $posicao => $indice);
    ?>

    <hr>


    <h2>Fazendo uma função tabuada</h2>
    <?php
        $tab = 6;
        for ($b=1;$b<=10;$b++){
            echo "$tab X $b = ".$tab * $b."<br>";
        }

        function tabuada($c){
            for ($i=0;$i<=10;$i++){
                echo "$c X $i = ".$c * $i."<br>";
            }
        }
    
    ?>
    <br>
    A tabuada do número é: <br><br><?php echo tabuada(7);?>




</body>
</html>