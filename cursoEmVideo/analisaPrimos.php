<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Aprovado ou Reprovado</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body class="resposta">
    
    <?php

        $numero = isset($_GET["num"]) ? $_GET["num"]:"1";

        echo "<h3>Analisando o número $numero...</h3>";

        $c=0;
        echo "<p>Valores múltiplos são: ";
        for ($i=1;$i<=$numero;$i++){
            if($numero % $i ==0){   
            echo $i."  ";
            $c++;
            }
        }
        echo "<p>O total de múltipos é de: $c!</p>";

        if($c==2){
            $primo = "é número primo";
        } else{
            $primo = "não é número primo";
        }

        echo "<p>Portanto ele $primo</p>";

    ?>


    <a href="cursoVideo1.php" class="botao"> Voltar</a>




</body>





</html>