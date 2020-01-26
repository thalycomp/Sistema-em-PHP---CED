<?php
   $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "produtos");
    
    $nome = $_POST['nome'];
    $qnt = $_POST['qnt'];
    $valor = $_POST['valor'];
    
    if (isset($_GET['idEditar'])){
        $idEditar = $_GET['idEditar'];
        $query = "update venda_produto set nome = '$nome', quantidade = $qnt, valor = $valor where id = $idEditar;";
    
        mysqli_query($conn, $query);
        echo("<script type='text/javascript'> alert('Produto editado!'
    ); location.href='../forms/form_cadastro.php';</script>");
    }
    else{
        $query = "insert into venda_produto (nome, quantidade, valor) values('$nome', $qnt, $valor);";
        mysqli_query($conn, $query);
        echo("<script type='text/javascript'> alert('Produto cadastrado!'
         ); location.href='../forms/cadastro.php';</script>");
    }
    
    mysqli_close($conn);
    
   
    
?>
