<?php include_once("header.php");
      include_once("conect.php");
      include_once("dataBaseProduto.php");
?>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <td>Nome</td>
                <td>Preço</td>
                <td>Descrição</td>
                <td>Categoria</td>
                <td>Alterar</td>            
            </tr>
        </thead>
        <?php 
            $produtos = listaProdutos($conecxao);
            foreach ($produtos as $produto):
        ?>
        <tr>
            <td><?php echo $produto["nome"]?></td>
            <td><?php echo $produto["preco"]?></td>
            <td><?php echo $produto["descricao"]?></td>
            <td><?php echo $produto["nomeCategoria"]?></td>       
            <td>
                <a href="updateProduto.php" class="btn btn-primary"></a>
            </td>     
        </tr>
        <?php
            endforeach;
        ?>
    </table>

<?php 
    mysqli_close($conecxao);
    include_once("footer.php");
?>