<!DOCTYPE html>
<!--
lista1-05.php) Criar um programa que atribua a uma variável chamada administrador um valor boleano
(true ou false). Em outra variável atribua um nome do administrador e em outra o nome de uma empresa.
	Retornar a seguinte mensagem em uma div, de acordo com o valor da variável administrador:
	XXXXX, você é administrador da empresa XXXXX.
	Ou
	XXXXX, você não é administrador da empresa XXXXX.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
         <?php
        $admin = FALSE;
        $nome = "Diego";
        $emp = "IFsouth";
        
        ?>
        
        <h1>Lista 1 – Exercício 4</h1>
            <div>
                <?php if($admin == TRUE) echo $nome . " você é admnistrador da empresa " . $emp;
                        else echo $nome . " você não é admnistrador da empresa " . $emp;
                ?>
            </div>
        
    </body>
</html>


