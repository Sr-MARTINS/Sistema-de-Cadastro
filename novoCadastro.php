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
    <form action="">
        <div id="boxForm">            
                <label for="nome">Nome</label>
                <input type="text" name="intName">
                
                <label for="email">Email</label>
                <input type="text" name="intEmail">
                
                <label for="bairro">Bairro</label>
                <input type="text" name="intBairro">
                
                <label for="endereco">Endereço</label>
                <input type="text" name="intEndereco">
                
                <label for="cidade">Cidade</label>
                <input type="text" name="intCity">

        </div> 
        <div id="subBox">
            <div class="outBox">
                <label for="cep">CEP :</label>
                <input type="number" name="intCep">
            </div>

            <div class="outBox">
                <label for="uf">UF :</label>
                <input type="number" name="intUf">
            </div>
                    
            <div class="outBox">
                <label for="sexo">SEXO :</label>
                <input type="check" name="intUf">
            </div>                    

            <div class="outBox">
                <label for="telefone">TELEFONE :</label>
                <input type="number" name="intUf">
            </div>
                  
            <div class="outBox">
                <label for="cpf">CPF :</label>
                <input type="number" name="intUf">
            </div>            
        
            <div class="outBox">
                <label for="rg">RG :</label>
                <input type="number" name="intUf">
            </div>
        </div>
        <div id="descricao">
            <label for="descricao">Descricao</label>
            <textarea name="" id=""></textarea>
        </div>
        <div id="buttns">
            <a href="#">
                <button type="submit" class="btn btn-success">
                    Cadastrar
                </button>
            </a>
            <a href="#">
                <button type="submit" class="btn btn-secondary">
                    Limpar
                </button>
            </a>
        </div>
    </form>
    </div>
    
</body>
</html>