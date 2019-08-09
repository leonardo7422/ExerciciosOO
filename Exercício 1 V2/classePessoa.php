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
        echo $this->data_nasc;
        echo"<br>";
    
        

        }
        function exibe_tr(){
            echo" <tr>
                    <td>".$this->nome."</td>
                    <td>".$this->email."</td>
                    <td>".$this->cpf."</td>
                    <td>".$this->sexo."</td>
                    <td>".$this->data_nasc."</td>
                    </tr>";

        }
        function __construct($n,$e,$c, $s, $d){
            $this->nome = $n;
            $this->email = $e;
            $this->cpf = $c;
            $this->sexo = $s;
            $this->data_nasc = $d;
        }
    }
        