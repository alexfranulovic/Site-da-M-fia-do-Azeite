<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <meta charset="utf-8">
    <title>Máfia do azeite</title>
        <link rel="shortcut icon" href="favicon.png" type="image/x-png"> 
<?php
if (isset($_POST['nome'])) {
        echo $_POST['nome'];
        echo $_POST['Sexo'];
        echo $_POST['rg'];
        echo $_POST['cpf'];
        echo $_POST['cep'];
        echo $_POST['endereco'];
        echo $_POST['bairro'];
        echo $_POST['cidade'];
        echo $_POST['telefone'];
        echo $_POST['email'];
        echo $_POST['categoria'];
        echo $_POST['salariopretendido'];
        echo $_POST['cargo'];
        echo $_POST['nivel'];
        echo $_POST['instituicao'];
        echo $_POST['anoconclusao']."<br>";
        foreach ($_POST as $key){
            echo "$key<br>";
        }
    }
    ?>
</head>
<body>
    <center>
        <nav>
            <header>
                <a HREF="home.html" TARGET="_blank" <button onclick=""><img src="logo.png" height="180"></button></a>
            </header>
                <menu class="menu">
        <center>    
            <ul>
                <li><a href="home.html">HOME</a></li>
                <li><a href="loja.html">LOJA</a></li>               
                <li><a href="produto.html">(manutenção)</a></li>
                <li><a href="index.php">CADASTRO</a></li>
                <li><a href="sobre.html">(manutenção)</a></li>         
            </ul>       
                <br><br><br><br><font color="#3a4c03" size="8" face="BadaBoom BB Regular">cadastro</font><br><br><br>

<form method="post" action="curriculo.php">
<div id="id">
<center><legend><font color="#3a4c03" size="6" face="arial">Identificação</font></legend></center>
    <fieldset>
<font color="#3a4c03" size="2" face="verdana">Nome:</font><br>
    <input name="nome" type="text" required="CAMPO OBRIGATÓRIO">
    <br>
<font color="#3a4c03" size="2" face="verdana">R.G.:</font><br>
    <input name="rg" type="text" maxlength="9">
    <br>
<font color="#3a4c03" size="2" face="verdana">C.P.F.:</font><br>
    <input name="cpf" type="text" maxlength="11">
    <br>
<font color="#3a4c03" size="2" face="verdana">Data de nascimento:</font><br> 
    <input name="nascimento" type="date" required>
    <br>
<font color="#3a4c03" size="2" face="verdana">Sexo:</font><br>
    <select name="sexo" required>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
    </select>
    <br>
    </fieldset>
</div>
    <center><legend><font color="#3a4c03" size="6" face="arial">Localização</font></legend></center>
<div id="localizacao">
    <fieldset>  
<font color="#3a4c03" size="2" face="verdana">C.E.P.:</font><br>
    <input name="cep" type="text">
    <br>
<font color="#3a4c03" size="2" face="verdana">Endereço:</font><br>
    <input name="endereco" type="text">
    <br>
<font color="#3a4c03" size="2" face="verdana">Bairro:</font><br>
    <input name="bairro" type="text">
    <br>
<font color="#3a4c03" size="2" face="verdana">Cidade:</font><br>
    <input name="cidade" type="text">
    <br>
<font color="#3a4c03" size="2" face="verdana">Telefone:</font><br>
    <input name="telefone" type="text">
    <br>
<font color="#3a4c03" size="2" face="verdana">E-mail:</font><br>
    <input name="email" type="text">
    </fieldset>
</div>
    <center><legend><font color="#3a4c03" size="6" face="arial">Pretenção</font></legend></center>
<div id="pretensao">
    <fieldset>

<font color="#3a4c03" size="2" face="verdana">Salário pretendido:</font><br>
    <input name= "salario" type="text" id="salario"><br>
<font color="#3a4c03" size="2" face="verdana">Cargo:</font><br>
    <input name= "cargo" type="text" id="cargo"><br>
<font color="#3a4c03" size="2" face="verdana">Área desejada:</font><br>
    <select name="area" id="area">
        <option value="Jurídico">Jurídico</option>
        <option value="Financeiro">Financeiro</option>
        <option value="Produção">Produção</option>
        <option value="T.I">T.I</option>
    </select>
 <br>    
</fieldset>
</div>
    <center><legend><font color="#3a4c03" size="6" face="arial">Formação</font></legend></center>
<div id="formacao">
    <fieldset>
<font color="#3a4c03" size="2" face="verdana">Instituição:</font><br>
    <input type="text" name="instituicao"><br>
<font color="#3a4c03" size="2" face="verdana">Ano de conclusão:</font><br>
    <input type="text" name="anoconclusao"><br>
<font color="#3a4c03" size="2" face="verdana">Nível:</font><br>
    <select name="nivel" id="nivel">
        <option value="Ensino fundamental II">Ensino Fundamental II</option>
        <option value="Ensino médio">Ensino Médio</option>
        <option value="Ensino superior">Ensino Superior</option>
        <option value="Pós graduação">Pós-Graduação</option>
        <option value="Mestrado">Mestrado</option>
    </select>
</fieldset>
    <center><br>
    <input type="submit" name="Submit" value="Enviar" class="botao">
    <input type="reset" name="reset value" value="Limpar" class="botao">
    
     <br><br><font color="grey" size="1" face="arial"> 2018 copyright Alex, Caio, César e Enzo </font>
    </center>
</div>
</form>
</body>
</html>