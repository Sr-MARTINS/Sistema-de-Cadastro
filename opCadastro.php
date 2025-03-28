<?php

require("crud.php");

    $nome         = $_POST["nome"];
    $email        = $_POST["email"];
    $telefone     = $_POST["telefone"]; 


    $dados = array (
        "nome"         => "$nome",
        "email"        => "$email",
        "telefone"     => "$telefone"
    );

    $add = addItem("cliente", $dados);

    if($acao == "Cadastrar") {
        inserir("cliente", $dados);
    }
    elseif($acao == "Editar") {
        
    }
    elseif($acao == "Excluir") {
        // deletar("cliente",)
    }

?>