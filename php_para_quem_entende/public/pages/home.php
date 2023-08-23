<a href="?page=create_user">Cadastrar user</a>

<h2>Página Inicial</h2>

<?= get('message') ?>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all('users');
        foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->nome ?></td>
                <td><?= $user->email ?></td>
                <td>
                    <a href="?page=edit_user&id=<?= $user->id ?>" class="btn btn-success">Editar</a>
                </td>
                <td>
                    <a href="?page=delete_user&id=<?= $user->id ?>" class="btn btn-danger">Deletar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>