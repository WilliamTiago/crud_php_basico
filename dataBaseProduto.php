<?php

    function listaProdutos($conecxao) {
        $produtos = array();
        $query="    SELECT p.*,
                           c.nome as nome 
                      FROM produtos as p
                INNER JOIN categorias as c 
                        ON c.categoria_id = p.categoria_id";

        $resultado = mysqli_query($conecxao,$query);
        while($produto = mysqli_fetch_assoc($resultado)){
             array_push($produtos, $produto);
        }

        return $produtos;

    }