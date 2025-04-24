<?php require_once  'cabecalho.php'; ?>
<form action="senac2.php" method="GET">
	<h1>Instituições de Ensino</h1>
	<p>Digite uma instituição de Ensino</p>
	<p><input type="text" name="instituicao"
	size="30" maxlength="30"
	pattern="[a-zA-Z/sçÇãÃéÉêÊ]{3,30}" required></p>
	<p><input type="submit" name="botao"
		value="Enviar"></p>

</form>
</body>
</html>