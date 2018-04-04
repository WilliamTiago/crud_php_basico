<!--realizar a busca do produto: $_GET['id']

Montar o formulario (essses dados devem ser enviados para o arquivo produto update.php)
    $nome
    $preço
    $descricao
    $categoria
        Carregar todas as categorias existentes no banco de dados
        Montar um campo select com todas as categorias
        Manter nesse campo select a categoria definida no cadastro do produto
            $produto['categoria_id'] == $categoria['id']
                Configugar a tag option com checkdate
   -->             


<?php 
      include_once("header.php");
      include_once("conect.php");
      include_once("dataBaseProduto.php");
      $produto = buscaProduto($conecxao,$_GET['id']);
?>

<form action="UpdateProduto.php" method="Post">
  <input value="<?php print $_GET['id']?>" name="id" type="hidden"></input>
  <div class="form-group">
    <label for="produto">Produto</label>
    <input type="text" class="form-control" id="produto" name="produto" value="<?php print $produto['nome']?>">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php print $produto['descricao']?>">
  </div>
  <div class="form-group">
    <label for="preco">Preço</label>
    <input type="number" class="form-control" id="preco" name="preco" value="<?php print $produto['preco']?>">
  </div>
  <div class="form-group">
    <label for="categoria">Categoria</label>
    <select class="form-control form-control-sm" id="categoria" name="categoria">
      <?php
        $categorias = listaCategorias($conecxao);
        foreach($categorias as $categoria):
      ?>
        <option value="<?php print $categoria['categoria_id']?>"><?php echo $categoria['nome']?></option>
        <?php
            endforeach;
        ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Alterar</button>
  <a href="listProduto.php" class="btn btn-primary">Cancelar</a>
  <button type="reset" class="btn btn-primary">Limpar</button>
</form>

<?php 
mysqli_close($conecxao);
include_once("footer.php"); 
?>

