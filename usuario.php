<form action="usuario.php" method="post">
    Nome:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    <input type="submit" value="Enviar dados!" />
    </form>

<?php

echo "Teste de números";

echo "<br>";
echo "<br>";

$numero = 95;
$resto = 0;

$resto = $numero % 2;

if ($resto == 0){
    echo "O número {$numero} é par";
}
else {
    echo "O número {$numero} é impar";
}

$soma = 0;
$valor1 = 10;
$valor2 = 20;

$soma = $valor1 + $valor2;

echo "<br><br> A soma dos números {$valor1} + {$valor2} é igual a: {$soma} ";

echo "<br><br>"; 

$_POST
