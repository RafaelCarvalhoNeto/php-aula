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

        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $notaFinal = ($nota1+$nota2)/2;

        if($notaFinal<5){
            $status = "REPROVADO";
            $span="rep";
        } elseif ($notaFinal>=5 && $notaFinal<7){
            $status = "RECUPERAÇÃO";
            $span = "rec";
        } else {
            $status = "APROVADO";
            $span = "apro";
        }
        
        echo "A nota final do aluno foi de $notaFinal <br>";

    ?>
    <p>O aluno está <span class="<?php echo $span ?>"><?php echo $status; ?></span></p>

    <a href="cursoVideo1.php" class="botao"> Voltar</a>




</body>





</html>