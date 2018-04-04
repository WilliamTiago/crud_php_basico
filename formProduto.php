<?php include_once("header.php");
      include_once("conect.php");
      include_once("dataBaseProduto.php");
?>

<form action="addProduto.php" method="Post">
  <div class="form-group">
    <label for="produto">Produto</label>
    <input type="text" class="form-control" id="produto" name="produto" placeholder="">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição</label>
    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
  </div>
  <div class="form-group">
    <label for="preco">Preço</label>
    <input type="number" class="form-control" id="preco" name="preco">
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
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php 
mysqli_close($conecxao);
include_once("footer.php"); 
?>

