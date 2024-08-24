<style>
    .flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<div class="flex mt-4">
    <h1 class="mb-2">Salas</h1>
    <a href="/rooms/create" class="btn btn-primary mb-3">Criar</a>
</div>

<!-- Table Section -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Capacidade</th>
            <th>Descrição</th>
            <th>Data de Criação</th>
            <th>Última Atualização</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($rooms as $room): ?>
            <tr>
                <td><?= $room['id'] ?></td>
                <td><?= $room['name'] ?></td>
                <td><?= $room['capacity'] ?></td>
                <td><?= $room['description'] ?></td>
                <td><?= $room['created_at'] ?></td>
                <td><?= $room['updated_at'] ?></td>
                <td>
                    <a href="/rooms/delete?id=<?= $room['id'] ?>" class="btn btn-danger btn-sm">Excluir</a>
                    <a href="/rooms/edit?id=<?= $room['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
</table>