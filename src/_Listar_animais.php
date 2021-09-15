<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


</head>
<body>

<div class="container" style="margin-top: 20px">
<h4>Animais cadastrados</h4>
<br>
<table class="table">
    <thead>
    <thead>
        <tr>
        <th scope="col">animal</th>
        <th scope="col">nome</th>
        <th scope="col">idade</th>
        <th scope="col">raca</th>
        <th scope="col">responsavel</th>
        <th scope="col">conntato</th>
        <th scope="col">ação</th>
        </tr>
    </thead>
    <tr>
        <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `animais`";
            $busca =mysqli_query($conexao,$sql);

            while($array = mysqli_fetch_array($busca)){
                $id_animais = $array['id_animais'];
                $animal = $array['animal'];
                $nome = $array['nome'];
                $idade = $array['idade'];
                $raca = $array['raca'];
                $responsavel = $array['responsavel'];
                $contato = $array['contato'];
                
    
        ?>
      <tr>  
      <td><?php echo $animal ?></td>
      <td><?php echo $nome ?></td>
      <td><?php echo $idade ?></td>
      <td><?php echo $raca ?></td>
      <td><?php echo $responsavel ?></td>
      <td><?php echo $contato ?></td>
      <td><a class="btn btn-warning btn-sm" href="_editar_animal.php?id=<?php
       echo $id_animais ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
       <a class="btn btn-warning btn-danger btn-sm" href="_excluir_animal.php?id=<?php
       echo $id_animais ?>" role="button"><i class="far fa-edit"></i>&nbsp;Excluir</a></td>
      

        </tr>
      <?php
            }
        ?>

    </tr>
</table>
<form action="index.php" method="post" style="margin-top : 20px">
        <div style="text-align: right;">
        <button type="submit" id="botao" class="btn btn-sm btn-success">Cadastrar</button>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>