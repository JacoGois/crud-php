<h1>Editar Sala</h1>
<form action="/rooms/edit">
    <input type="text" id="id" name="id" hidden value="<?php echo $room['id']; ?>"><br>
    <label for="name">Nome:</label><br>
    <input required type="text" id="name" name="name" value="<?php echo $room['name']; ?>"><br>
    <label for="capacity">Capacidade:</label><br>
    <input required type="number" id="capacity" name="capacity" value="<?php echo $room['capacity']; ?>"><br>
    <label for="description">Descrição:</label><br>
    <textarea required id="description" name="description"><?php echo $room['description']; ?></textarea><br>
    <button type="submit">Salvar</button>
</form>