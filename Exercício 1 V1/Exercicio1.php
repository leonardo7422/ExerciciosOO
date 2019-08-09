<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
        <article>
               <?php 
               echo" <form action=\"exibe1.php\" method=\"POST\">
                    <fieldset>
                         <legend>Cadastro de cliente</legend>
                    <p>
                     <label>Nome:</label>
                    <input type=\"text\" name=\"nome\" size=\"30\"/>
                    <p>
                    <label>Email:</label>
                    <input type=\"email\" name=\"email\" size=\"50\"/>
                    </p>
                    <p>
                    <label>CPF:</label>
                    <input type=\"number\" name=\"cpf\" size=\"30\"/>
                    </p>
                    <p>
                    <label>Sexo:</label>
                    <input type=\"radio\" name=\"sexo\" value=\"Masculino\"/>Masculino
                    <input type=\"radio\" name=\"sexo\" value=\"Feminino\"/>Feminino
                    </p>
                    <label>Data de Nascimento</label>
                    <input type=\"date\" name=\"data\"/>
                    </p>

                    <input type=\"submit\" value=\"Cadastrar cliente\"/>
                    </fieldset>
            </form>
            <br/>
            <br/>
            <br/>
            </article>";
            
            
        ?>  
    
</body>
</html>