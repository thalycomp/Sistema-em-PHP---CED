<?php
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "produtos");
    
    $query = "select * from venda_produto;";
    
     $res = mysqli_query($conn, $query);
     $linha = mysqli_fetch_assoc($res);
     $total = mysqli_num_rows($res);
?>
<html>
    <head>
        <title>Listar todos</title>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' /> 
        <link rel="stylesheet" type="text/css" href="../css/styletest.css" />
    </head>
</html>
<body>
    <form method="post">
    <h1>Todos os produtos</h1>
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
       <td><?php echo $linha['nome'];?></td>
        <td><?php echo $linha['valor'];?></td>
        <td><a href="excluir.php?id=<?php echo $linha['id'];?>"><img width="30" src="../img/Delete.png"></a></td>
        <td><a href="editar.php?idEditar=<?php echo $linha['id'];?>"><img width="30" src="../img/editar.png"></a></br></td>
    
        <?php
            }while($linha = mysqli_fetch_assoc($res)); 
        }
    ?>
        </tr>
    </tbody>
    </table>
    </form>
</body>
<html>
    <?php 
        mysqli_free_result($res);
        mysqli_close($conn);
    ?>
    <p><a href="../forms/form_cadastro.php">IR A PAGINA PRINCIPAL</a></p>
</html>
