<?php

//TESTES



$palavra = "Info";  
$palavra .= "serv";
echo "$palavra";
?>


<form action="usuario.php" method="post">               <!-- criar um formulário em HTML passando qual arquivo .php  -->
Digite um Número: <input type="number" name="Num"> 
<input type="submit" name="Submit" value="OK">
</form>

<?php

// $_POST['Num'];
//echo $_POST['Num'];

$num = $_REQUEST['Num'] ?? 0;


if($num % 2 == 0){
    echo "O numero {$num} é Par";
}else {
    echo "O numero {$num} é Ímpar";
}


echo "<br>";
echo "===============";
echo "<br>";


switch($num){

    case 0:
        echo "o {$num} é par. <br>";
        break;
    default: echo "O {$num} é impar. <br>"; //Default é quando não acha nenhum CASE
        break;
    }


echo "<br>";
echo "===============";
echo "<br>";


$valor1 = 10;
$valor2 = 20;
$soma = $valor1 + $valor2;
echo "A soma de {$valor1} + {$valor2} é {$soma}.";


echo "<br>";
echo "===============";
echo "<br>";

$var = [
    0 => "é par",
    1 => "é impar"
];
echo $var[$num] ?? "não foi possível calcular";
//Quando não existir o valor cai nele ->>>> ??

echo "<br>";
echo "===============";
echo "<br>";