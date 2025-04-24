<?php require_once  'cabecalho.php'; ?>
<form action="produto2.php" method="GET">
	<h1>Produto</h1>
	<p>Valor do Produto</p>
	<p><input type="number" name="preco" step="0.01" 
		min="0" required></p>
	<p>Quantidade do Produto:</p>
	<p><input type="number" name="quantidade" step="1" min="1" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
</form>
</body>
</html>