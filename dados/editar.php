<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar</title>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' /> 
	<link rel="stylesheet" type="text/css" href="../css/styletest.css" />
	
    </head>
    <body>
	<h1>Editar</h1>

             <?php $idEditar = $_GET['idEditar'];
                $conn = mysqli_connect("localhost", "root", "");
                mysqli_select_db($conn, "produtos");
                $query = "select * from venda_produto where id = $idEditar;";
                $res = mysqli_query($conn, $query);
                $dados = mysqli_fetch_array($res);
                
                mysqli_close($conn);
             ?>
          <ul class="form">
         <form method="post" action="../dados/inserir.php?idEditar=<?php echo $idEditar;?>">
             <li id="nome"><label>Nome:</label><input type="text" size="20" name="nome" value="<?php echo $dados['nome']?>"><br></li>
             <li id="qnt"><label>Quantidade:</label><input type="text" size="3" name="qnt" value="<?php echo $dados['quantidade']?>"><br></li>
             <li id="valor"><label>Valor:</label><input type="text" size="5" name="valor" value="<?php echo $dados['valor']?>"><br></li>
            <input  class="but but-primary" type="submit" value="Editar">
        </form> 
    </body>
</html>
