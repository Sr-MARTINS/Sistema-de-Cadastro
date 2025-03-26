<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm" style=" width: 100%;">
        <nav class="navbar bg-body-tertiary" style=" width: 100%">
            <div class="container-fluid">
                <div class="d-flex justify-content-center">
                    <img src="img/capa.PNG" alt="" class="img-thumbnail" style="width:60px; margin-right:1rem;">
                    <h1>Sistema de Cadastro</h1>
                </div>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <main  class="d-flex justify-content-start" style=" width: 1120px; height:500px; margin:auto; --bs-columns: 3;">

        <div  class="grid" style=" border:1px solid #000; width:20%; margin-right:1rem; d-flex justify-content-center">
            <h2>Menu</h2>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Novo Cadastro</a></li>
                <li><a href="">Alterar</a></li>
                <li><a href="">Deletar</a></li>
                <li><a href="">Lista</a></li>
            </ul>  
        </div>

        <div  class="grid" style=" border:1px solid #000; width:80%; d-flex justify-content-center">

            <h2 style="margin-left:2rem;">Home</h2>
            <hr>

            <div  class="border border-grey d-flex align-itens-center" style="padding:5px;">

                <span class=""  style=" border:1px solid #000; margin-right:5px;">Numero de cadastro: </span>
                <p> 1045 pessoas cadastradas</p>
            </div>

            <div class="d-flex justify-content-center">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

    </main>

    
</body>
</html>