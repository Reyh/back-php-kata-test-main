<?php

namespace App\Entity;

class Learner
{
    public int $id;
    public string $firstname;
    public string $lastname;
    public string $email;

    public function __construct(int $id, string $firstname, string $lastname, string $email)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Learner
     */
    public function setId(int $id): Learner
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Learner
     */
    public function setFirstname(string $firstname): Learner
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     * @return Learner
     */
    public function setLastname(string $lastname): Learner
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Learner
     */
    public function setEmail(string $email): Learner
    {
        $this->email = $email;
        return $this;
    }


}
