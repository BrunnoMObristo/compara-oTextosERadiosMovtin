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
$ncondicao1 = $_POST['condicao1'];
$condicao2 = $_POST['condicao2'];
$condicao3 = $_POST['condicao3'];

 if ($condicao1 and $condicao2) {
// somente se as duas forem verdadeiras
echo 'Operador "and" Verdadeiro: ', var_dump($condicao1, $condicao2), '<br>';
} else {
echo 'Operador "and" Falso: ', var_dump($condicao1, $condicao2), '<br>';
}

 if ($condicao1 or $condicao2) {
//Verdadeiro se qualquer uma das duas condições forem verdadeiras
echo 'Operador "or" Verdadeiro: ', var_dump($condicao1, $condicao2), '<br>';
} else {
echo 'Operador "or" false: ', var_dump($condicao1, $condicao2), '<br>';
}

 if ($condicao1 xor $condicao3) {
//somente se uma das duas forem verdadeiras
echo 'Operador "xor" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
} else {
echo 'Operador "xor" false: ', var_dump($condicao1, $condicao3), '<br>';
}

 if (!$condicao2) {
// Nega a condicao e entra aqui somente se negando for verdadeiro
echo 'Operador "!" Verdadeiro: ', var_dump($condicao2), '<br>';
} else {
echo 'Operador "!" false: ', var_dump($condicao2), '<br>';
}

 if ($condicao1 && $condicao3) {
// somente se as duas forem verdadeiras
echo 'Operador "&&" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
} else {
echo 'Operador "&&" Falso: ', var_dump($condicao1, $condicao3), '<br>';
}

 if (!$condicao1 || !$condicao3) {
//Verdadeiro se qualquer uma das duas condições forem verdadeiras
echo 'Operador "||" Verdadeiro: ', var_dump($condicao1, $condicao3), '<br>';
} else {
echo 'Operador "||" false: ', var_dump($condicao1, $condicao3), '<br>';
}
}
?>

    <form action="index2.php" method="POST">
        <input type="radio" name="condicao1">Condição 1
        <input type="radio" name="condicao2">Condição 2
        <input type="radio" name="condicao3">Condição 3

        <button type="submit" name="submitar">Analisar
    </form>
</body>
</html>