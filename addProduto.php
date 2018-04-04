<?php 
    include_once("conect.php");
    include_once("dataBaseProduto.php");
    
$adicionaProduto = adicionaProduto($conecxao,$_POST['produto'],$_POST['preco'],$_POST['descricao'],$_POST['categoria']);
if($adicionaProduto){
    ?>
    <script>
        alert("Deu boa");
        window.location.href = 'formProduto.php';
    </script>    
    <?php 
}else{
    echo"Não deu cara!";    
}
?>