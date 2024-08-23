<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

class Room 
{
   private DateTime $created_at;
   private ?DateTime $updated_at;
   private int $id;
   private string $name;
   private int $capacity;
   private ?string $description;

   public function __construct() {}

   public function getId(): int
   {
       return $this->id;
   }

   public function getName(): string
   {
       return $this->name;
   }

   public function getCapacity(): int
   {
       return $this->capacity;
   }

   public function getDescription(): ?string
   {
       return $this->description;
   }

   public function getCreatedAt(): DateTime
   {
       return $this->created_at;
   }

   public function getUpdatedAt(): string
   {
       return $this->updated_at?->format('Y-m-d H:i:s');
   }

   public function setName(string $name): void
   {
       $this->name = $name;
       $this->updated_at = new DateTime();
   }

   public function setCapacity(int $capacity): void
   {
       $this->capacity = $capacity;
       $this->updated_at = new DateTime();
   }

   public function setDescription(?string $description): void
   {
       $this->description = $description;
       $this->updated_at = new DateTime();
   }
}
