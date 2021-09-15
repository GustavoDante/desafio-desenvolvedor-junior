<?php
    include 'conexao.php';
    $id = $_GET['id'];

?>
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
    <form action="_atualizar_animal.php" method="post" style="margin-top : 20px">
    <?php

        $sql = "SELECT * FROM `animais` WHERE id_animais = $id";
        $buscar = mysqli_query($conexao,$sql);
        while($array = mysqli_fetch_array($buscar)){
            $id_animais = $array['id_animais'];
            $animal = $array['animal'];
            $nome = $array['nome'];
            $idade = $array['idade'];
            $raca = $array['raca'];
            $responsavel = $array['responsavel'];
            $contato = $array['contato'];

    ?>

    <div class="mb-3">

        <select class="form-select" name="animal" value="<?php echo $animal ?>">
             <option selected>Cachorro</option>
         <option>Gato</option>
         </select>
        
        </div>
        <div class="mb-3">
            <label> Nome </label>
            <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
       
        </div>
        <div class="mb-3">
            <label> Idade </label>
            <input type="text" class="form-control" name="idade" value="<?php echo $idade ?>">
        
        </div>
        <div class="mb-3">
            <label> Raça </label>
            <input type="text" class="form-control" name="raca" value="<?php echo $raca ?>">
       
        </div>
        <div class="mb-3">
            <label> Nome do responsável </label>
            <input type="text" class="form-control" name="responsavel" value="<?php echo $responsavel ?>">
       
        </div>
        <div class="mb-3">
            <label> Telefone para contato </label>
            <input type="text" class="form-control" name="contato" value="<?php echo $contato ?>">
       
        </div>
        
        <div style="text-align: right;">
        <button type="submit" id="botao" class="btn btn-sm">Editar</button>
        <?php } ?>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>