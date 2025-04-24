<?php require_once  'cabecalho.php'; ?>
<form action="idade2.php" method="GET">
	<h1>Idade</h1>
	<!-- <p>Digite o ano de nascimento</p>
	 <p><input type="number" name="ano" 
		min="1908" max="<?= date('Y') ?>" step="1"  required></p>
	<p><input type="submit" name="botao" value="Calcular"></p> -->
	<p>Digite a data de Nascimento</p>
	<p><input type="date" name="datanasci"
		min="1908-01-01" max="<?= date('Y-m-d') ?>" required></p>
		<p><input type="submit" name="botao" value="Calcular>"></p>
</form>
</body>
</html>
