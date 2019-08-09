<?php

    class Pessoa{

        public $nome;
        public $email;
        public $cpf;
        public $sexo;
        public $data_nasc;

            
        function mostrar_pessoa(){
        echo"Nome: ";
        echo $this->nome;
        echo"<br>";
        echo"Email: ";
        echo $this->email;
        echo"<br>";
        echo"CPF: ";
        echo $this->cpf;
        echo"<br>";
        echo"Sexo: ";
        echo $this->sexo;
        echo"<br>";
        echo"Data de Nascimento: ";
        echo $this->data;
        echo"<br>";
    
        

        }
    }
        