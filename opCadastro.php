<?php

    require("crud.php");

    @$id    = $_POST["id"];
    @$acao  = $_POST["acao"];

        //cadastro
        $nome         = $_POST["nome"];
        $email        = $_POST["email"];
        $telefone     = $_POST["telefone"]; 


        $dados = array (
            "nome"         => "$nome",
            "email"        => "$email",
            "telefone"     => "$telefone"
        );

    if($acao == "Cadastrar") {
        $op = addItem("cliente", $dados);
    }
    elseif($acao == "Editar") {
        
        $op = atualizar("cliente", $dados, "id_cliente = $id");
    }
    elseif($acao == "Excluir") {
        $op = deletar("cliente", $dados, "id_cliente = $id");
    }
    
    if($op) {
        header("Location:index.php?link=5");
        // print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=5'>
        //  <script type = 'text/javascript'> alert('Operação realizada com sucesso') </script>";
    }else {
        print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=5'>
         <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";
    }

?>