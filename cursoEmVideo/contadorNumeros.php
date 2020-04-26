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

        $start = isset($_GET["start"]) ? $_GET["start"]:"1";
        $end = isset($_GET["end"]) ? $_GET["end"]:"5";
        $inc = isset($_GET["inc"]) ? $_GET["inc"]:"1";

        if($start<$end){
            while ($start<=$end){
                echo $start." ";
                $start += $inc;
            }
        } else {
            while ($start>=$end){
                echo $start." ";
                $start -= $inc;
            }
        }


    ?>


    <a href="cursoVideo1.php" class="botao"> Voltar</a>




</body>





</html>