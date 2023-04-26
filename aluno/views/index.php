<?php 
include("../models/conexao.php");
include("blades/header.php");
?>
<div class="container bg-white mt-5 rounded-2 p-3 shadow-lg">
    <a class="btn btn-success" href="cadastro.php">Cadastrar</a>
    <hr>
    <form action="index.php" method="post">
        <input class="form-control" type="text" name="buscar" size="30" placeholder="Buscar">
    </form>
    <hr>

    <?php
    if(empty($_POST["buscar"])){
        echo "Nenhum resultado";
    } else { 
    $varBusca = $_POST["buscar"];
    ?>

    <table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>Dados do aluno</th>
            <th>Atualização</th>
            <th>Remoção</th>
        </tr> 
    </thead> 

    <tbody>

    <?php   
    $query = mysqli_query($conexao, "SELECT * FROM aluno WHERE nome LIKE '%$varBusca%' ORDER BY nome");
    while($exibe = mysqli_fetch_array($query)){
        $varSexo = ($exibe[9]=="m")?"o":"a";
        echo "<tr>" .
             "<td>". strtoupper($varSexo) .  " alun$varSexo <b>". $exibe[1] ."</b> mora na rua: ". $exibe[2]."</b> da cidade de ". $exibe[3]."</b> no bairro: ". $exibe[4]."</b> no estado: ". $exibe[5]."</b>, o celular do responsável é: ". $exibe[6]."</b> a data de nascimento é: ". $exibe[7]."</b> o nome da mãe é: ". $exibe[8].".</td>" .
             "<td><a href='cadastroAtualiza.php?ida=".$exibe[0]."' class='btn btn-primary'>Editar</a></td>" .
             "<td><a class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#JanelaModal".$exibe[0]."'>Deletar</a></td>" .
             "</tr>";

             include("blades/modal.php");
    }
    ?>

    </tbody>
    </table>
    <?php } ?>
</div>
<?php 
include("blades/footer.php");
?>


    