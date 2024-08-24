<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\DatabaseManager;
use App\Repository\RoomRepository;

final class RoomController extends AbstractController
{
    private RoomRepository $roomRepository;

    public function __construct(DatabaseManager $dbManager)
    {
        $this->roomRepository = new RoomRepository($dbManager->getConnection());
    }

    public function index(): void
    {
        $rooms = $this->roomRepository->getAllRooms();

        parent::render('room/index', [
            'rooms' => $rooms,
        ]);
    }

    public function create(): void
    {
        $name = $_GET['name'] ?? '';
        $description = $_GET['description'] ?? '';
        $capacity = $_GET['capacity'] ?? '';

        if ($name) {
            $this->roomRepository->createRoom($name, $description, (int) $capacity);

            parent::redirect('/rooms');
            return;
        }

        parent::render('room/create');
    }

    public function edit(): void
    {
        $id = $_GET['id'] ?? '';
        $name = $_GET['name'] ?? '';
        $description = $_GET['description'] ?? '';
        $capacity = $_GET['capacity'] ?? '';

        if ($name) {
            $this->roomRepository->updateRoom((int) $id, $name, $description, (int) $capacity);

            parent::redirect('/rooms');
            return;
        }

        $room = $this->roomRepository->getRoomById((int) $id);

        parent::render('room/edit', [
            'room' => $room,
        ]);
    }

    public function delete(): void
    {
        $id = $_GET['id'] ?? '';
        $this->roomRepository->deleteRoom((int) $id);

        parent::redirect('/rooms');
    }
}
