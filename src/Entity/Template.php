<?php

namespace App\Entity;

class Template
{
    public int $id;
    public string $subject;
    public string $content;

    public function __construct(int $id, string $subject, string $content)
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->content = $content;
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
     * @return Template
     */
    public function setId(int $id): Template
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Template
     */
    public function setSubject(string $subject): Template
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Template
     */
    public function setContent(string $content): Template
    {
        $this->content = $content;

        return $this;
    }
}