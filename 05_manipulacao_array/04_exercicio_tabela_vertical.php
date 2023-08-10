<?php

$array = [
    'nome' => 'Leonardo',
    'idade' => 23,
    'empresa' => 'B7web',
    'cor' => 'Azul',
    'profissao' => 'Programador'
];

?>

<table border="1">
    <?php foreach ($array as $key => $value) { ?>
        <tr>
            <th><?= $key ?> </th>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>