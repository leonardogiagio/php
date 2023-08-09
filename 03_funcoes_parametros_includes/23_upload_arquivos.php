<form method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" value="Enviar">
</form>

<?php

echo '<pre>';
print_r($_FILES);

// $nome = $_FILES['arquivo']['name'];

if (in_array($_FILES['arquivo']['type'], array('image/jpg', 'image/jpeg'))) {
    $nome = md5(time() . rand(0, 1000)) . '.jpg';
    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/' . $nome);

    echo 'Arquivo salvo com sucesso!';
} else {
    echo 'Arquivo não permitido';
}
