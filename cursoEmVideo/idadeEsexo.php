<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Idade e Sexo</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body class="resposta">
    
    <?php
        // Se o valor que eu pedi, foi configurado, me retornar meu dado, se não "Não informado
        $nome = isset($_GET["nome"]) ? $_GET["nome"]:"[Não informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"]:0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
        $idade = date("Y") - $ano;  
        echo "$nome é $sexo e tem $idade anos";



    ?>
    <a href="cursoVideo1.php" class="botao"> Voltar</a>



</body>





</html>