<?php 
include("../models/conexao.php");
include("blades/header.php");
?>
<div class="container bg-white mt-5 rounded-2 p-3 shadow-lg"> 
    <form action="../controllers/cadastrarAluno.php" method="post">
        <label>Nome:</label><br>
        <input class="form-control border-2 border-success" type="text" name="nome"><br>
        <label>Informe o nome da rua:</label><br>
        <input class="form-control border-2 border-success" type="text" name="rua"><br>
        <label>Informe a cidade:</label><br>
        <input class="form-control border-2 border-success" type="text" name="cidade"><br>
        <label>Informe o bairro:</label><br>
        <input class="form-control border-2 border-success" type="text" name="bairro"><br>
        <label>Informe o estado:</label><br>
        <input class="form-control border-2 border-success" type="text" name="estado"><br>
        <label>Informe o celular do responsável:</label><br>
        <input class="form-control border-2 border-success" type="text" name="celular"><br>
        <label>Informe a data de nascimento:</label><br>
        <input class="form-control border-2 border-success" type="text" name="nascimento"><br>
        <label>Informe o nome da mãe:</label><br>
        <input class="form-control border-2 border-success" type="text" name="mae"><br>
        <label>Informe o sexo:</label><br>
        <input type="radio" value="m" name="sexo">M<br>
        <input type="radio" value="f" name="sexo">F<br><br>
        <input class="btn btn-success" type="submit" value="Cadastrar">
    </form>
<div>
<?php 
include("blades/footer.php");
?>