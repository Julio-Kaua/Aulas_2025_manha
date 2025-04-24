<?php require_once 'cabecalho.php'; ?>
<form action="escola.php" method="POST">
	<h1>Escola de Natação</h1>
	<p>Digite o nome do aluno:</p>
	<p><input type="text" name="nome"
		size="50" maxlength="70" 
		pattern="[a-zA-Z\sçÇãÃéÉêÊáÁ]{2,70}"
		required></p>
	<p>Digite a data de nascimento:</p>
	<p><input type="date" name="datanasci"
		min="1908-01-01" max="<?= date('Y-m-d')?>"
		required></p>
	<p><input type="submit" name="botao"
		value="Cadastrar"></p>	
</form>
<?php
	if (isset($_POST['botao'])) {
		$nome=$_POST['nome'];
		$datanasci=new DateTime($_POST['datanasci']);
		$hoje=new DateTime(date('Y-m-d'));
		$idade=$hoje->diff($datanasci)->y;
		echo "<section class='resultado'>";
		if ($idade<6) {
			echo "<p>$nome não pode fazer aula!</p>";			
		}else if($idade>=6&&$idade<=10){
			echo "<p>$nome está na turma peixinho!</p>";
			echo "<img src='img/peixinho.png'>";
		}else if ($idade>11&&$idade<=14) {
			echo"<p>$nome está na turma peixe!</p>";
			echo"<img src='img/peixe.png'>";
		}else if ($idade>15&&$idade<=17) {
			echo"<p>$nome está na turma carpa!</p>";
			echo"<img src='img/carpa.png'>";
		}else if ($idade>18&&$idade<=100) {
			echo"<p>$nome está na turma tubarão!</p>";
			echo"<img src='img/tubarao.png'>";
		}else{
			echo"<p> Não atendemos essa faixa!<p>";
		}
	}
?>