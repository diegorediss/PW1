<!DOCTYPE html>
<!--
lista1-04.php) Atribuir a uma variável um número qualquer. Escrever, um abaixo do outro, 
os 10 números que seguem ao atribuído.
* adaptar  o exemplo para exibir os 10 próximos números pares.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
         <?php
        $num = 10;
      
        ?>
        
        <h1>Lista 1 – Exercício 4</h1>
            <div>
                
                <p><?php 
                       for($i=0; $i<10; $i++) 
                       echo $num = $num + 1 . "<br />"; 
                    ?></p> 
                
            </div>
        
    </body>
</html>


