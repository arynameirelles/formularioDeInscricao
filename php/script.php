<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmação de Dados</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <?php
            

            $nome = $_POST ["nome"];
            $end = $_POST ["end"]; 
            $tel = $_POST ["tel"];
            $email = $_POST ["email"];
            $data= $_POST ["data"];
            $sexo = $_POST ["sexo"];
            $msg = $_POST ["msg"];
            $arquivo = $_POST ["arquivo"];

        ?> 


        <div>
            <h3 class="conf"> Confirmação de Dados </h3>
        </div>

        <br><br>

        <div class="cont">

            <h2 class="resposta"> Nome: </h2>
                <h1><?php echo $nome; ?> </h1>
            
            <br><br>
            <h2  class="resposta" > Endereço: </h2>
            <h1><?php echo $end; ?></h1>  
            
            <br><br>
            <h2  class="resposta" > Telefone: </h2>
            <h1><?php echo $tel; ?> </h1> 
            
            <br><br>
            <h2  class="resposta" >E-mail:</h2>
                <h1><?php echo $email; ?> </h1>
            
            <br><br>
            <h2  class="resposta" >Data de Nascimento:</h2>
            <h1><?php echo $data; ?> </h1> 
            
            <br><br>
            <h2  class="resposta" >Sexo:</h2>
            <h1><?php echo $sexo; ?> </h1> 

            <br><br>
            <h2  class="resposta" >Expectativa para vaga:</h2>
            <h1><?php echo $msg; ?> </h1> 

            <br><br>
            <h2  class="resposta" >Arquivo:</h2>
            <h1><?php echo $arquivo; ?> </h1> 

            

            
        </div>

    </body>

</html>
