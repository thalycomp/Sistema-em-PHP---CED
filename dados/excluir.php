<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "produtos");
    
    $idDelete = $_GET['id'];
    $query = "delete from venda_produto where id=$idDelete;";
    
    $res = mysqli_query($conn, $query);
    
    echo("<script type='text/javascript'> alert('Produto excluido!'
    ); location.href='../forms/form_cadastro.php';</script>");
?>