<?php
include("../models/conexao.php");

mysqli_query($conexao, "UPDATE aluno SET nome='". $_POST["nome"]."', rua='".$_POST["rua"]."', cidade='". $_POST["cidade"]."', bairro='". $_POST["bairro"]."', estado='". $_POST["estado"]."', celular='". $_POST["celular"]."', nasc='". $_POST["nascimento"]."', mae='". $_POST["mae"]."', sexo='". $_POST["sexoAluno"]."' WHERE codigo=".$_POST["alunoCodigo"]);

header("location:../views");
?>