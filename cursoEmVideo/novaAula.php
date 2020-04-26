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
        /*
        function soma($a, $b){
            $s=$a+$b;
            echo "A soma vale $s <br>";
        }

        soma(2,5);
        soma (10, 34);
        */
    ?>
    <h2>FUNÇÃO SOMA</h2>
    <?php
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0;$i<$t;$i++){
                $s=$s+$p[$i];
            }
                return $s;
        }
        
        $r = soma (3,4,5,6, 12, 20);
        echo "A soma dos valores é $r.<br>";
    ?>
    <h2>Referência Função</h2>
    <?php
        function teste (&$x){
            $x +=2;
            echo "O valor de x é $x.<br>";
        }
        $a = 3;
        teste ($a);
        echo "O valor de a é $a";
    
    
    ?>

    <a href="cursoVideo1.php" class="botao"> Voltar</a>




</body>





</html>