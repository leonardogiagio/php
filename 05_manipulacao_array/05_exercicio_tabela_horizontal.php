<?php

$array = [
    'nome' => 'Leonardo',
    'idade' => 23,
    'empresa' => 'B7web',
    'cor' => 'Azul',
    'profissao' => 'Programador'
];

$keys = array_keys($array);
$values = array_values($array);

?>

<table border="1">
    <tr>
        <?php foreach ($keys as $key) { ?>
            <th><?= $key ?></th>
        <?php } ?>
    </tr>
    <tr>
        <?php foreach ($values as $value) { ?>
            <td><?= $value ?></td>
        <?php } ?>
    </tr>
</table>