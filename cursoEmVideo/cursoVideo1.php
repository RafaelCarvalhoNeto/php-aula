<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
    <title>Curso em Video - p1</title>
    <link rel="stylesheet" href="../css/style.css">
    

</head>
<body>
    
    <h1>Curso em Video de PHP - part1</h1>
    <h2>Cálculo da raiz quadrada de um número</h2>
    <form class="forma" method="get" action="calculoRaizQ.php">
        <label>Valor: </label><input type="number" name="v">
        <input class="botao" type="submit" value="calcular">
    </form>

    <h2>Retorna idade e sexo da pessoa</h2>

    <form class="forma" action="idadeEsexo.php" method="get">
        <label>Nome: </label><input type="text" name="nome"><br>
        <label>Ano de nasc.: </label><input type="number" name="ano"><br>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked><label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="fem" value="mulher"><label for="fem">Feminino</label>
        </fieldset><br>
        <input class="botao" type="submit" value="Enviar">

    </form>

    <h2>Edita Fonte e Cor do texto inserido</h2>

    <form class="forma" action="editaTexto.php" method="get">
        <label for="itxt">Texto: </label>
        <input type="text" name="t" id="itxt"><br>
        <label for="itam">Tamanho</label>
        <select name="tam" id="itam">
            <option value="8pt">8</option>
            <option value="10pt">10</option>
            <option value="14pt">14</option>
            <option value="20pt">20</option>
            <option value="40pt">40</option>
        </select><br>
        <label for="icor">Cor</label>
        <input type="color" name="cor" id="icor"> <br>
        <input class="botao" type="submit" value="Gerar">
    </form>

    <h2>Status do Aluno pela Nota</h2>

    <form class="forma" action="notasAlunos.php" method="get">
        <label>Nota 1:</label><input type="number" name="n1"><br>
        <label>Nota 2:</label><input type="number" name="n2"><br>
        <input class="botao" type="submit" value="Rodar">
    </form>

    <h2>A região do estado </h2>
    <form action="regiaoEstado.php">
        <label for="estado">Estado: </label>
        <select name="estado" id="estado">
            
        <?php
            $array = ['Acre',
            'Alagoas',
            'Amapá',
            'Amazonas',
            'Bahia',
            'Ceará',
            'Distrito Federal',
            'Espírito Santo',
            'Goiás',
            'Maranhão',
            'Mato Grosso',
            'Mato Grosso do Sul',
            'Minas Gerais',
            'Pará',
            'Paraíba',
            'Paraná',
            'Pernambuco',
            'Piauí',
            'Rio de Janeiro',
            'Rio Grande do Norte',
            'Rio Grande do Sul',
            'Rondônia',
            'Roraima',
            'Santa Catarina',
            'São Paulo',
            'Sergipe',
            'Tocantins'];   

            for ($i=0;$i<count($array);$i++){ ?>
               <option value="<?php echo $array[$i];?>"><?php echo $array[$i];?></option> <?php } ?>
        </select>

        <input type="submit" value="Enviar" class="botao">

    </form>
    
    <h2>Contador de números automático</h2>
    <form action="contadorNumeros.php">
        <label for="inicio">Início</label>
        <input type="number" name="start"><br>
        <label for="fim">Fim</label>
        <input type="number" name="end"><br>
        <label for="incremento">Incremento</label>
        <select id="incremento" name="inc">
            <option value = "Esc" disabled selected>Escolha</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <input type="submit" class="botao" value="Definir">
    </form>

    <h2>Analisador de números primos</h2>
    <form action="analisaPrimos.php">
        <label for="numero">Número:</label>
        <input type="number" name="num">
        <input type="submit" class="botao" name="Enviar">

    </form>


</body>



</html>