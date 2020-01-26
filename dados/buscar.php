<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "produtos");
    
    $nome = $_POST['nome'];
    
    
    $query = "select * from venda_produto where nome like '%$nome%';";
    $res = mysqli_query($conn, $query);
    
    $dados = mysqli_fetch_array($res);
    $nomeBusca = $dados['nome'];
    $valorBusca = $dados['valor'];
    echo $nomeBusca." ".$valorBusca;
    $total = mysqli_num_rows($res);
    
    
    
?>
<html>
    <head>
        <title>Buscar</title>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' /> 
        <link rel="stylesheet" type="text/css" href="../css/styletest.css" />
    </head>
</html>
<body>
    <form method="post">
    <h1>Produto</h1>
    <table  id="playlistTable">
    <thead>
        <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Excluir</th>
        <th>Editar</th>
        </tr>
    </thead>
     <?php
        if($total > 0){
            
            do{
    ?>
    <tbody>
        <tr>
        <td><?php echo $dados['nome'];?></td>
        <td><?php echo $dados['valor'];?></td>
        <td><a href="excluir.php?id=<?php echo $dados['id'];?>"><img width="30" src="../img/Delete.png"></a></td>
        <td><a href="editar.php?idEditar=<?php echo $dados['id'];?>"><img width="30" src="../img/editar.png"></a></td>
   
        <?php
            }while($dados = mysqli_fetch_assoc($res)); 
        }else{
            echo("<script type='text/javascript'> alert('Produto não encontrado!'
         ); location.href='../forms/buscar.php';</script>");
        }
    ?></tr>
    </tbody>
    </table>
    </form>
      </form>
        </body>
        <html>
            <?php 
                mysqli_free_result($res);
                mysqli_close($conn);
            ?>
            <p><a href="../forms/form_cadastro.php">IR A PAGINA PRINCIPAL</a></p>
</html>

