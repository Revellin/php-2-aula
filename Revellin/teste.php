<html>
    <head>
        <title> PHP -Aula Exemplo do Uso de Variáveis</title>
    </head>
    <body>
        <?php 
           //DEclarado variáveies
           $var1 =1; //inteiro
           $varX = 9.50; //ponto flutuante
           $varY = 9.50; //ponhto flutunate 
           $var2 = $varX + $varY; //recebendo o resultado de uma expressão 

           $varSTR = "Atribui String"; //variável teste - string
           $varletra = "a"; //variável caracter
           $varbool = true; //atribuição lógico

           echo "<strong>Exemplo de uma aplicação em PHP</strong>";
           print "<P>";
           
           echo"<strong>Conteúdo de var1: </strong>";
           echo $var1;
           print "<P>";

           echo"<strong>Conteúdo de varX: ";
           echo $varX;
           print "<P>";

           echo"<strong>Conteúdo de varY: </strong>";
           echo $varY;
           print "<P>";

           echo"<strong>onteúdo de var2: </strong>";
           echo $var2;
           print "<P>";

           echo"<strong>Conteúdo de varSTR:</strong>";
           echo $varSTR;
           print "<P>";

           echo"<strong>Conteúdo de varletra: </strong>";
           echo $varletra;
           print "<P>";

           echo"<strong>Conteúdo de varbool: </strong>";
           echo $varbool;
    
        ?>
    </body>
</html>