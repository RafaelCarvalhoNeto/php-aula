<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Calcula Raiz Quadrada</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body class="resposta">
    
    <?php
        
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é ".number_format($rq,2);



    ?>
    <a href="cursoVideo1.php" class="botao"> Voltar</a>



</body>





</html>