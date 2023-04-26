<?php 
include("../models/conexao.php"); 
include("blades/header.php");
?>

<?php
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = ".$_GET["ida"]);
    while($exibe = mysqli_fetch_array($query)){
?>

<div class="container bg-white mt-5 rounded-2 p-3 shadow-lg"> 
    <form action="../controllers/atualizarAluno.php" method="post">
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <label>Nome:</label><br>
        <input class="form-control border-2 border-success" type="text" name="nome" value="<?php echo $exibe[1] ?>"><br>
        <label>Informe o nome da rua:</label><br>
        <input class="form-control border-2 border-success" type="text" name="rua" value="<?php echo $exibe[2] ?>"><br>
        <label>Informe a cidade:</label><br>
        <input class="form-control border-2 border-success" type="text" name="cidade" value="<?php echo $exibe[3] ?>"><br>
        <label>Informe o bairro:</label><br>
        <input class="form-control border-2 border-success" type="text" name="bairro" value="<?php echo $exibe[4] ?>"><br>
        <label>Informe o estado:</label><br>
        <input class="form-control border-2 border-success" type="text" name="estado" value="<?php echo $exibe[5] ?>"><br>
        <label>Informe o celular do responsável:</label><br>
        <input class="form-control border-2 border-success" type="text" name="celular" value="<?php echo $exibe[6] ?>"><br>
        <label>Informe a data de nascimento:</label><br>
        <input class="form-control border-2 border-success" type="text" name="nascimento" value="<?php echo $exibe[7] ?>"><br>
        <label>Informe o nome da mãe:</label><br>
        <input class="form-control border-2 border-success" type="text" name="mae" value="<?php echo $exibe[8] ?>"><br>
        <label>Informe o sexo:</label><br>
        <input type="radio" value="m" name="sexoAluno" <?php echo ($exibe[9]=="m")?"checked":""?>>M<br>
        <input type="radio" value="f" name="sexoAluno" <?php echo ($exibe[9]=="f")?"checked":""?>>F<br><br>
        <input class="btn btn-success" type="submit" value="Atualizar">
    </form>
</div>
    <?php } ?>

<?php 
include("blades/footer.php");
?>
