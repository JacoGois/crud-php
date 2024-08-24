<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #007bff;
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .btn-custom {
        background-color: #007bff;
        color: white;
        border: none;
    }
    .btn-custom:hover {
        background-color: #0056b3;
    }
</style>
<h1 class="mb-4 mt-4">Editar Sala</h1>
<form action="/rooms/create" method="post">
    <input type="text" id="id" name="id" hidden value="<?php echo $room['id']; ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $room['name']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="capacity" class="form-label">Capacidade:</label>
        <input type="number" class="form-control" id="capacity" name="capacity" value="<?php echo $room['capacity']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrição:</label>
        <textarea class="form-control" id="description" name="description" rows="4"><?php echo $room['description']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-custom">Salvar</button>
</form>