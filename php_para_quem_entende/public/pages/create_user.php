<form action="/pages/forms/create_user.php" method="POST">
    <legend>Cadastro de Usuário</legend>

    <?= get('message'); ?>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="password">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>