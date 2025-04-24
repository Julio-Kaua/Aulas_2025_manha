<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
	$instituicao=$_GET["instituicao"];
	/*if ($instituicao== "Senac")*/
	if (strtolower($instituicao)=="senac"){
		echo"<p>Parabéns, uma ótima escolha!</p>";
	}else{
		echo"<p>$instituicao Que pena! Poderia ser o Senac... </p>";
	}
	echo "<div><a href='senac.php' class='link'>
	Outra instituição?</a></div>";
	

?>
</section>
</body>
</html>
