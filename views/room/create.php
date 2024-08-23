<h1>Criar Sala</h1>
<form action="/rooms/create">
    <label for="name">Nome:</label><br>
    <input required type="text" id="name" name="name"><br>
    <label for="capacity">Capacidade:</label><br>
    <input required type="number" id="capacity" name="capacity"><br>
    <label for="description">Descrição:</label><br>
    <textarea required id="description" name="description"></textarea><br>
    <button type="submit">Criar</button>
</form>