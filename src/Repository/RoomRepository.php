<?php

namespace App\Repository;

use App\Entity\Room;

class RoomRepository
{
    private \PDO $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAllRooms(): array
    {
        $query = $this->pdo->query('SELECT * FROM rooms');
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createRoom(string $name, string $description, int $capacity): void
    {
        $room = new Room();

        $room->setName($name);
        $room->setDescription($description);
        $room->setCapacity($capacity);

        $query = $this->pdo->prepare('INSERT INTO rooms (name, description, capacity, created_at, updated_at) VALUES (:name, :description, :capacity, NOW(), :updated_at)');
        $query->execute(['name' => $room->getName(), 'description' => $room->getDescription(), 'capacity' => $room->getCapacity(), 'updated_at' => $room->getUpdatedAt() ]);
    }

    public function updateRoom(int $id, string $name, string $description, int $capacity): void
    {
        $room = new Room();

        $room->setName($name);
        $room->setDescription($description);
        $room->setCapacity($capacity);

        $query = $this->pdo->prepare('UPDATE rooms SET name = :name, description = :description, capacity = :capacity, updated_at = :updated_at  WHERE id = :id');
        $query->execute(['name' => $room->getName(), 'description' => $room->getDescription(), 'capacity' => $room->getCapacity(), 'updated_at' => $room->getUpdatedAt(), 'id' => $id]);
    }

    public function deleteRoom(int $id): void
    {
        $query = $this->pdo->prepare('DELETE FROM rooms WHERE id = :id');
        $query->execute(['id' => $id]);
    }

    public function getRoomById(int $id): ?array
    {
        $query = $this->pdo->prepare('SELECT * FROM rooms WHERE id = :id');
        $query->execute(['id' => $id]);
        $room = $query->fetch(\PDO::FETCH_ASSOC);

        return $room ? $room : null;
    }
}
