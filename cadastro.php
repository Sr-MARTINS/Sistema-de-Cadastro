<?php
    require_once("crud.php");

    @$acao = $_GET["acao"];
    @$id   = $_GET["id"];

    if($acao != "") {

        $sql = "SELECT * FROM cliente WHERE id_cliente = $id";
        $qyr = executar($sql);
        $linha = mysqli_fetch_array($qyr); 

        $id_cliente = $linha["id_cliente"];
        $nome       = $linha["nome"];
        $email      = $linha["email"];
        $telefone   = $linha["telefone"];

        $dados = array (
            "id_cliente" => "$id_cliente",
            "nome"       => "$nome",
            "email"      => "$email",
            "telefone"   => "$telefone",
        );

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/novoCadastro.css">
</head>
<body>
    <h2 style="margin:10px 0 0 20px">Enserir cadastro </h2>
    <hr>

    <div id="envep">
    <form action="opCadastro.php" method="POST">
        <div id="boxForm">            
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?php echo @$nome ?>" >
                
                <label for="email">Email</label>
                <input type="text" name="email" value="<?php echo @$email ?>" >
                
                <label for="email">Telefone</label> 
                <input type="number" name="telefone" value="<?php echo @$telefone ?>">

                <input type="hidden" name="acao" value="<?php if($acao == "") echo "Cadastrar"; else echo $acao ?>">
                <input type="hidden" name="id" value="<?php echo @$id ?>">
        </div> 
        <div id="buttns">
            <input type="submit" class="btn btn-success" value="<?php if($acao == "") echo "Cadastrar"; else echo $acao ?>" >

            <input type="reset" name="Reset" class="btn btn-secondary">
        </div>
    </form>
    </div>
    
</body>
</html>