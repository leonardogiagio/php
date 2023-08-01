<form method="GET">
    <p>
        <label for="">
            Nome: <br>
            <input type="text" name="nome">
        </label>
    </p>

    <p>
        <label for="">
            Idade: <br>
            <input type="text" name="idade">
        </label>
    </p>

    <p>
        <label for="">
            email: <br>
            <input type="email" name="email">
        </label>
    </p>

    <input type="submit" value="Enviar">

</form>

<?php

$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $email && $idade) {
    echo 'Nome: ' . $nome . '<br>';
    echo 'Idade: ' . $idade . '<br>';
    echo 'email: ' . $email . '<br>';
} else {
    echo 'Não enviou';
}