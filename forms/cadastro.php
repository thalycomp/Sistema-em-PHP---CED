<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' /> 
	<link rel="stylesheet" type="text/css" href="../css/styletest.css" />
	
    </head>
    <body>
	<h1>Cadastro</h1>
	
	<ul class="form">
                <form method="post" action="../dados/inserir.php">
                <li id="nome"><label>Nome:</label><input type="text" size="20" name="nome"></li>
                <li id="qnt"><label>Quantidade:</label><input type="text" size="3" name="qnt"><br></li>
                <li id="valor"><label>Valor:</label><input type="text" size="5" name="valor"><br></li>
                <input class="but but-primary" type="submit" value="Cadastrar">
                
                </form>
                
	</ul>
	
        <p><a href="../forms/form_cadastro.php">IR A PAGINA PRINCIPAL</a></p>

</body>
</html>