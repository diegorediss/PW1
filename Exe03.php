<!DOCTYPE html>
<!--
lista1-03.php) Criar três variáveis representando:
nome de um país;
capital;
Continente.
Escrever no html essas informações da seguinte forma:
<div>XXXXX é um país do continente XXXXX. Sua capital é XXXXX</div>.
Trocar os XXXXX pelo valor das variáveis.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
         <?php
        $pais = "Alemanha";
        $capital = "Berlim";
        $continente = "Europeu";
      
        ?>
        
        <h1>Lista 1 – Exercício 3</h1>
            <div>
            <p><?php echo $pais ?> é um país do continente <?php echo $continente ?>. Sua capital é <?php echo $capital ?>
            </div>
        
    </body>
</html>
