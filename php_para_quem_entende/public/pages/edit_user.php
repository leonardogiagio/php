<form action="/pages/forms/edit_user.php" method="POST">
    <legend>Edição de Usuário</legend>

    <?= get('message'); ?>

    <?php
    $user = find('users', 'id', $_GET['id']);
    ?>
    
    <input type="hidden" name="id" value="<?= $user->id ?>">


    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" value="<?= $user->nome ?>">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" value="<?= $user->sobrenome ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" value="<?= $user->email ?>">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password" value="<?= $user->password ?>">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>