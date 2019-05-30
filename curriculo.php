<!DOCTYPE html>
	<html>
	<head>
    	<link rel="stylesheet" type="text/css" href="cur.css">
    	<meta charset="utf-8">
   		<title>Máfia do azeite</title>
        <link rel="shortcut icon" href="favicon.png" type="image/x-png"> 
	</head>
	<body>	
	<center>
		<nav>
			<header>
				<a HREF="home.html" TARGET="_blank"	<button onclick=""><img src="logo.png" height="180"></button></a>
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
     	<br><br><br><br><font color="#3a4c03" size="8" face="BadaBoom BB Regular">seus dados
     	:</font><br><br><br>

	<fieldset style="width: 500px">
	<legend>Identificação</legend>
	<div class="iden">
	<?php
	 echo 'Nome: '.$_POST['nome']."<br>";
	 echo 'Data de Nascimento: '.$_POST['nascimento']."<br>";
	 echo 'Sexo: '.$_POST['sexo']."<br>";
	 echo 'R.G: '.$_POST['rg']."<br>";
	 echo 'C.P.F: '.$_POST['cpf']."<br>";
	 ?>
	</div>
	</fieldset>
	<fieldset style="width: 500px">
	<legend>Localização</legend>
	<div class="loca">
	 <?php
	 echo 'C.E.P: '.$_POST['cep']."<br>";
	 echo 'Endereço: '.$_POST['endereco']."<br>";
	 echo 'Bairro: '.$_POST['bairro']."<br>";
	 echo 'Cidade: '.$_POST['cidade']."<br>";
	 echo 'Telefone: '.$_POST['telefone']."<br>";
	 echo 'E-mail: '.$_POST['email']."<br>";
	 ?>
	</div>
	</fieldset>
	<fieldset style="width: 500px">
	<legend>Pretenção</legend>
	<div class="pretençao">
	<?php
	 echo 'Área Desejada: '.$_POST['area']."<br>";
	 echo 'Salário Desejado: R$ '.$_POST['salario']."<br>";
	 echo 'Cargo: '.$_POST['cargo']."<br>";
	 ?>
	<div>
	</fieldset>
	<fieldset style="width: 500px">
	<legend>Formação</legend>
	<div class="forma">
	<?php
	 echo 'Nivel: '.$_POST['nivel']."<br>";
	 echo 'Instituição: '.$_POST['instituicao']."<br>";
	 echo 'Ano de Conclusão: '.$_POST['anoconclusao']."<br>";
	?>
	<div>
</fieldset>
	
					<br><font color="grey" size="1" face="arial"> 2018 copyright Alex, Caio, César e Enzo </font>
	</body>
    </center>
	</html>