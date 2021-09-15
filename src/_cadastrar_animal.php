<?php

include 'conexao.php';

$animal = $_POST["animal"];
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$raca = $_POST["raca"];
$responsavel = $_POST["responsavel"];
$contato = $_POST["contato"];

$sql = "INSERT INTO `animais`(`animal`, `nome`, `idade`, `raca`, `responsavel`, `contato`)
             VALUES ('$animal','$nome','$idade','$raca','$responsavel','$contato')";

$inserir = mysqli_query($conexao, $sql);

?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"   
     integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <div class="container" style="width: 500px ;margin-top: 20px">
    <center>
     <h4>Animal cadastrado com sucesso</h4>
    </center>
    <div style="padding-top: 20px">
        <center>
            <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar</a>
        </center>
    </div>