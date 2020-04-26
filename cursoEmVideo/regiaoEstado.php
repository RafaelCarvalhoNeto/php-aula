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

        $estado = isset($_GET["estado"]) ? $_GET["estado"]:"DF";

        switch ($estado){
            case 'Distrito Federal':
            case 'Goiás':
            case 'Mato Grosso':
            case 'Mato Grosso do Sul':
                $regiao = "Centro-Oeste";
                break;
            case 'Alagoas':
            case 'Bahia':
            case 'Ceará':
            case 'Maranhão':
            case 'Paraíba':
            case 'Pernambuco':
            case 'Piauí':
            case 'Rio Grande do Norte':
            case 'Sergipe':
                $regiao = "Nordeste";
                break;
            case 'Acre':
            case 'Amapá':
            case 'Amazonas':
            case 'Pará':
            case 'Rondônia':
            case 'Roraima':
            case 'Tocantins':
                $regiao = "Norte";
                break;
            case 'Espírito Santo':
            case 'Minas Gerais':
            case 'Rio de Janeiro':
            case 'São Paulo':
                $regiao = "Sudeste";
                break;
            case 'Paraná':
            case 'Rio Grande do Sul':
            case 'Santa Catarina':
                $regiao = "Sul";
        }
        
        echo "O estado selecionado foi $estado"."<br>";
        echo "Esse estado fica na <h3> Região $regiao</h3>"
    ?>


    <a href="cursoVideo1.php" class="botao"> Voltar</a>




</body>





</html>