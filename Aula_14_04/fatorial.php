<?php require_once 'cabecalho.php'; ?>
<form action="fatorial.php" method="GET">
	<h1>Fatorial</h1>
	<p>Digite o numero:</p>
	<p><input type="number" name="numero" step="1" min="0" required></p>
	<p><input type="submit" name="botao" value="Calcular"></p>
	</form>
<?php 
	if (isset($_GET['botao'])) {
	 	echo"<section class='resultado'>";
	 	$numero=$_GET['numero'];
	 	$fatorial=1;
	 	for ($contador=$numero;$contador>=1 ; $contador--){ 
	 		$fatorial=$fatorial*$contador;
	 	}
	 	echo"<p> $numero ! = $fatorial</p>";
	 echo"</section>";
	 } 
 ?>
</body>
</html>
