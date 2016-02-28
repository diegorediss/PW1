<!DOCTYPE html>
<!--
lista1-01.php) Atribuir um valor qualquer a uma variável que represente salário.  
Se o salário for menor que 400 escrever: Você é estagiário, se ficar entre 400 e 800 escrever 
Programador JR, na faixa seguinte (até 1500) escrever Programador Pleno e na última faixa escrever 
Programador Sênior.
A estrutura do html deve ser basicamente a seguinte:

<h1>Lista 1 – Exercício 1</h1>
<div></div>
Escrever o texto dentro da div.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
         <?php
        $salario = 750.00;
        $funcao = "empregado";
        
        if ($salario <= 400.00) {
        $funcao = "estagiario"; }
            else
            if ($salario >= 400.00 && $salario <= 800.00) {
            $funcao = "programador jr"; } 
                else
                if ($salario >= 800.00 && $salario <= 1500.00) {
                $funcao = "programador jr"; }
                    else
                    if ($salario > 1500.00) {
                    $funcao = "programador senior"; }
        ?>
        
        <h1>Lista 1 – Exercício 1</h1>
            <div>
            <p>Você é <?php echo $funcao ?></p>
            </div>
        
    </body>
</html>
