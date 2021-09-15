<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pet Reliquary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style type="text/css">
        
        #tamanhoContainer{
             width: 500px;
        }

        #botao{
            background-color: #1D0670;
            color: #FFFFFF;
        }
    </style>



</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top : 40px">
    <h4>Pet Reliquary</h4>
    <form action="_cadastrar_animal.php" method="post" style="margin-top : 20px">

    <div class="mb-3">

        <select class="form-select" name="animal" aria-label="Default select example" autocomplete="off" autocomplete="off" required>
            <option selected>Cachorro</option>
        <option>Gato</option>
        </select>
        
        </div>
        <div class="mb-3">
            <label> Nome </label>
            <input type="text" class="form-control" name="nome" placeholder="Insira o Nome do Animal" autocomplete="off" required>
       
        </div>
        <div class="mb-3">
            <label> Idade </label>
            <input type="text" class="form-control" name="idade" placeholder="Insira a idade do animal" autocomplete="off" required>
        
        </div>
        <div class="mb-3">
            <label> Raça </label>
            <input type="text" class="form-control" name="raca" placeholder="Insira a raça do Animal (Opcional)" autocomplete="off">
       
        </div>
        <div class="mb-3">
            <label> Nome do responsável </label>
            <input type="text" class="form-control" name="responsavel" placeholder="Insira o Nome do responsável pelo animal" autocomplete="off" required>
       
        </div>
        <div class="mb-3">
            <label> Telefone para contato </label>
            <input type="text" class="form-control" name="contato" placeholder="Um telefone para contato" autocomplete="off" required>
       
        </div>
        
        <div style="text-align: right;">
        
        <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
        </form>

    <form action="_Listar_animais.php" method="post" style="margin-top : 20px">
        <div style="text-align: right;">
        <button type="submit" id="botao" class="btn btn-sm">Listar</button>
    </div>
    </form>
        
    
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>