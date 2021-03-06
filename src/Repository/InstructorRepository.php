<?php

namespace App\Repository;

use App\Entity\Instructor;
use App\Helper\SingletonTrait;

// DO NOT MODIFY THIS CLASS
class InstructorRepository implements Repository
{
    use SingletonTrait;

    private array $base;

    /**
     * InstructorRepository constructor.
     */
    public function __construct()
    {
        $this->base = [];
    }

    /**
     * @param int $id
     * @return Instructor
     */
    public function getById($id): Instructor
    {
        return $this->base[$id];
    }

    public function save($entity)
    {
        $this->base[$entity->id] = $entity;
    }
}
