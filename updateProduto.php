<?php 
    include_once("conect.php");
    include_once("dataBaseProduto.php");
    
$alteraProduto = alteraProduto($conecxao,$_POST['id'],$_POST['produto'],$_POST['preco'],$_POST['descricao'],$_POST['categoria']);
if($alteraProduto){
    ?>
    <script>
        alert("Deu boa");
        window.location.href = 'listProduto.php';
    </script>    
    <?php 
}else{
    echo"Não deu cara!";    
}
?>