<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form action="<?= $base ?>/user/<?= $usuario['id'] ?>/update" method="POST">
    <label for="">
        Nome: <br>
        <input type="text" name="name" value="<?= $usuario['nome'] ?>">
    </label> <br><br>

    <label for="">
        Email: <br>
        <input type="email" name="email" value="<?= $usuario['email'] ?>">
    </label> <br><br>

    <input type="submit" value="Salvar">
</form>

<?php $render('footer'); ?>