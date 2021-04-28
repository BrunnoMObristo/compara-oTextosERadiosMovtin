<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if(isset($_POST["submitar"]) == "POST"){ 
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];

//Testa se $n1 é igual a $n2
if ($n1 == $n2) {
echo "O primeiro número é igual ao segundo <br>";
} else {
echo "O primeiro número é diferente do segundo <br>";
}



//Testa se $n1 é diferente de $n2
if ($n1 <> $n2) {
echo "O primeiro número é diferente do segundo número <br>";
} else {
echo "Os dois números são iguais <br>";
}

//Testa se $n1 é diferente de $n2
if ($n1 != $n2) {
echo "O primeiro número é diferente do segundo número <br>";
} else {
echo "Os dois números são iguais <br>";
}



//Testa se $n1 é menor que $n2
if ($n1 < $n2) {
echo "O primeiro númeo é menor que o segundo número <br>";
} else {
echo "O primeiro número não é menor que o segundo número <br>";
}



//Testa se $n3 é maior que $n1
if ($n3 > $n1) {
echo "O terceiro número é maior que o primeiro número <br>";
} else {
echo "O terceiro número não é maior que o primeiro número <br>";
}



//Testa se $n1 é menor ou igual a $n2
if ($n1 <= $n2) {
echo "O primeiro número é menor ou igual ao segundo número <br>";
} else {
echo "O primeiro número não é menor ou igual ao segundo número <br>";
}



//Testa se $n1 é maior ou igual a $n2
if ($n1 >= $n2) {
echo "O primeiro número é maior ou igual ao segundo número <br>";
} else {
echo "O primeiro número não é maior ou igual ao segundo número <br>";
}



//Testa se $n3 é idêntico a $n2
if ($n3 === $n2) {
echo "O terceiro número é idêntico ao segundo número <br>";
} else {
echo "O terceiro número não é idêntico ao segundo número <br>";
}



//Testa se $n1 não é idêntico a $n2
if ($n1 !== $n2) {
echo "O terceiro número não é idêntico ao segundo número <br>";
} else {
echo "O terceiro número é idêntico ao segundo número <br>";
}
}
?>

<form action="index.php" method="POST">

    <input type="number" name="num1">Primeiro Número
    <input type="number" name="num2">Segundo Número
    <input type="number" name="num3">Terceiro Número
    <input type="submit" name="submitar">Analisar</button>
</form>

</body>
</html>