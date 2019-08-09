<?php 

    include("classePessoa.php");
    include("cabecalho.php"); 

    //$p1 = new Pessoa();


    //$p1->nome = $_POST["nome"];
   // $p1->email = $_POST["email"];
    //$p1->cpf = $_POST["cpf"];
    //$p1->sexo = $_POST["sexo"];
    //$p1->data = $_POST["data"];

   // $_SESSION["pessoa"][] = $p1;

    //$p1->exibe_tr();

    $n = $_POST["nome"];
    $e = $_POST["email"];
    $c = $_POST["cpf"];
    $s = $_POST["sexo"];
    $d = $_POST["data_nasc"];
    $p = new Pessoa($n, $e, $c, $s, $d);
    $p->mostrar_pessoa();