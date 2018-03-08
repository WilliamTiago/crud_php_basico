<?php include_once("header.php");
      include_once("conect.php");
      include_once("dataBaseProduto.php");
?>
    <table class-"table table-striped table-bordered">
        <th>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Categoria</td>            
        </th>
        <?php 
            $produtos = listaProdutos($conecxao);
            foreach ($produtos as $produto):
        ?>
        <tr>
            <td><?php echo $produto["nome"]?></td>
            <td><?php echo $preco["preco"]?></td>
            <td><?php echo $descricao["descricao"]?></td>
            <td><?php echo $categoria["categoria"]?></td>       
            <td>
                <a href="updateProduto.php" class="btn btn-primary"></a>
            </td>     
        </tr>
        <?php
            endforeach;
        ?>
    </table>

<? 
    include_once("footer.php");
?>