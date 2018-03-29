<?php 
    include_once("conect.php");
    include_once("dataBaseProduto.php");
    
$adicionaProduto= adicionaProduto($conecxao,$_POST['categoria'],$_POST['descricao'],$_POST['produto'],$_POST['preco']);
if($adicionaProduto){
    header ("Location: formProduto.php?<script>alert('Deu Boa meu garoto!')");
}else{
    echo"Não deu cara!";    
}
?>