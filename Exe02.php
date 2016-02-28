<!DOCTYPE html>
<!--
lista1-02.php) Adaptar o exercício anterior, atribuindo em uma variável o nome do funcionário. 
Quando escrever o resultado colocar o nome do funcionário junto.
Exemplo:
	Marcelo, você é programador.

* colocar o nome do funcionário em negrito.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       
         <?php
        $nome = "Diego";
        $salario = 3000.00;
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
        
        <h1>Lista 1 – Exercício 2</h1>
            <div>
            <p><?php echo $nome ?> você é <?php echo $funcao ?></p>
            </div>
        
    </body>
</html>
