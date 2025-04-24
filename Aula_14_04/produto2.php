<?php require_once 'cabecalho.php'; ?>
<section class="resultado">
<?php
    $preco = $_GET['preco'];
    $quantidade = $_GET['quantidade'];
    $total = $preco * $quantidade;
    $preco=number_format($preco,2,',',',');
    $total=number_format($total,2,',',',');    
    echo "<p>Para $quantidade un. a R$ $preco cada o total fica R$ $total</p>";
    echo "<div><a href='produto.php' class='link'>Novo Produto?</a></div>";
?>
</section>
</body>
</html>