<?php 

    include("classePessoa.php");

    $p1 = new Pessoa();


    $p1->nome = $_POST["nome"];
    $p1->email = $_POST["email"];
    $p1->cpf = $_POST["cpf"];
    $p1->sexo = $_POST["sexo"];
    $p1->data = $_POST["data"];

    $p1->mostrar_pessoa();