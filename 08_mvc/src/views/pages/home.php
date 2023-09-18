<?php $render('header'); ?>

<a href="<?= $base ?>/novo">Novo Usuário</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach ($usuarios as $usuario) { ?>
        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['nome'] ?></td>
            <td><?= $usuario['email'] ?></td>
            <td>
                <a href="<?=$base?>/user/<?=$usuario['id']?>/update">[ EDITAR ]</a>
                <a href="<?=$base?>/user/<?=$usuario['id']?>/delete">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php } ?>

</table>

<?php $render('footer'); ?>