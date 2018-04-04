<?php 
    include_once("conect.php");
    include_once("dataBaseProduto.php");
    
$deletaProduto = removeProdutos($conecxao,$_GET['id']);
if($deletaProduto){
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