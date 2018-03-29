<?php

    function listaProdutos($conecxao) {
        $produtos = array();
        $query="    SELECT p.*,
                           c.nome as nomeCategoria 
                      FROM produto as p
                INNER JOIN categoria as c 
                        ON c.categoria_id = p.categoria_id";

        $resultado = mysqli_query($conecxao,$query);
        while($produto = mysqli_fetch_assoc($resultado)){
             array_push($produtos, $produto);
        }

        return $produtos;

    }

    function alteraProduto($conecxao ,$id, $nome, $preco, $descricao, $categoria_id){
        $query="update produto set nome =" . $nome . ",preco=". $preco . ",descricao= " . $descricao . ",categoria=" . $categoria_id ."where id =" . $id;
        return  mysql_query($conecxao,$query);

    }

    function listaCategorias($conexcao){
        $categorias = array();
        $query="    SELECT * 
                    FROM categoria";
        $resultado = mysqli_query($conexcao,$query);
        while($categoria = mysqli_fetch_assoc($resultado)){
            array_push($categorias,$categoria);
        }
        return $categorias;
    }

    function buscaProduto($conecxao, $id){
        $query="SELECT p.*,
                       c.nome as nomeCategoria 
                  FROM produto as p
            INNER JOIN categoria as c 
                    ON c.categoria_id = p.categoria_id where id=".$id;
        $resultado = mysqli_query($conexcao,$query);
        return mysql_fetch_assoc($resultado);

    }

    function removeProdutos($conexcao,$id){
            $query="delete from produto where id=".$id;
            return mysql_query($resultado,$query);
    }

    function adicionaProduto($conecxao ,$categoria_id,$descricao,$nome, $preco){
        $query="INSERT INTO produto values (3,$categoria_id,$descricao,$nome,$preco)";
        mysqli_query($conecxao,$query);
        return  mysql_query($conecxao,$query);
        
    }
   