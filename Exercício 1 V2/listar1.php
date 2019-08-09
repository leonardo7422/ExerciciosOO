<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 


            include("classePessoa.php");
            session_start();
            include("cabecalho.php");

            ?>
           
            <div class="center">
            <table class="tabela1" width="40%" border="2">
            <thead>
                <tr>    
                    <th>nome:</th>
                    <th>email:</th>
                    <th>cpf:</th>
                    <th>Sexo:</th>
                    <th>Nasc:</th>
                </tr>
                </thead>

                <tbody>
                    <?php
                        foreach($_SESSION["pessoa"] as $i=>$p)
                        {
                            $p->exibe_tr();
                        }
                        ?>

    
</body>
</html>