<?php

    include 'conexao.php';

    $id = $_POST['id'];
    $animal = $_POST["animal"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $raca = $_POST["raca"];
    $responsavel = $_POST["responsavel"];
    $contato = $_POST["contato"];  

$sql = "UPDATE `animais` SET `animal`='$animal',`nome`='$nome',`idade`='$idade',
    `raca`='$raca',`responsavel`='$responsavel',`contato`='$contato' WHERE id_animais = $id";
    
$atualizar = mysqli_query($conexao, $sql);

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <div class="container" style="width: 400px">
    <center>
        <h3>Atualizado com sucesso</h3>
        <div style="margin-top: 10px">
        <a href="_listar_animais.php" class="btn btn-sm btn-warning">Voltar</a>
</div>
    </center>
    </div>