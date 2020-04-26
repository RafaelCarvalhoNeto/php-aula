<!DOCTYPE html>
<html lang="pt">
<head>
    <?php

        $txt= isset($_GET["t"])?$_GET["t"]:"[Texto genérico]";
        $tam= isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor= isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>


    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Edita Texto</title>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?> ;
        }
    </style>

</head>
<body class="resposta">
    
    <?php

        echo "<span class='texto'>$txt</span>";
    ?>
    <br>
    <a class="botao" href="cursoVideo1.php"> Voltar</a>



</body>





</html>