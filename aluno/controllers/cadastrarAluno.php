<?php
include("../models/conexao.php");

$varAlunoNome = $_POST["nome"];
$varAlunoRua = $_POST["rua"];
$varAlunoCidade = $_POST["cidade"];
$varAlunoBairro = $_POST["bairro"];
$varAlunoEstado = $_POST["estado"];
$varAlunoCelular = $_POST["celular"];
$varAlunoNasc = $_POST["nascimento"];
$varAlunoMae = $_POST["mae"];
$varAlunoSexo = $_POST["sexoAluno"];


mysqli_query($conexao, "INSERT INTO aluno (nome, rua, cidade, bairro, estado, celular, nasc, mae, sexo) 
VALUES ('". $_POST["nome"]."', '".$_POST["rua"]."', '". $_POST["cidade"]."', '". $_POST["bairro"]."', '". $_POST["estado"]."', '". $_POST["celular"]."', '". $_POST["nascimento"]."', '". $_POST["mae"]."', '". $_POST["sexo"]."')");

header("location:../views");
?>