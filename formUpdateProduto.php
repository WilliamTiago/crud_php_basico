<?php 
include_once("header.php");
include_once("conect.php");
include_once("dataBaseProduto.php");
?>

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
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include_once("footer.php"); ?>