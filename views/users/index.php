<table class="table table-bordered">
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach ($data['content'] as $user): ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name ?></td>
                <td><?= $user->email ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>