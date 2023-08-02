<?php

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$listaNomes = file_get_contents('nomes.txt');

if ($nome != '') {
    if ($listaNomes != '') {
        $listaNomes .= "\n" . $nome;
    } else {
        $listaNomes .= $nome;
    }
}

file_put_contents('nomes.txt', $listaNomes);

$arrNomes = explode("\n", $listaNomes);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <label for="">
            Novo Nome:
        </label> <br>
        <input type="text" name="nome">
        <input type="submit" value="Adicionar">
    </form>

    <ul>
        <?php foreach ($arrNomes as $nome) { ?>
            <li><?= $nome ?></li>
        <?php } ?>
    </ul>
</body>

</html>