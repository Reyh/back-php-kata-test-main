<?php

namespace App\Entity;

class MeetingPoint
{
    public int $id;
    public string $url;
    public string $name;

    public function __construct(int $id, string $url, string $name)
    {
        $this->id = $id;
        $this->url = $url;
        $this->name = $name;
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
     * @return MeetingPoint
     */
    public function setId(int $id): MeetingPoint
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return MeetingPoint
     */
    public function setUrl(string $url): MeetingPoint
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return MeetingPoint
     */
    public function setName(string $name): MeetingPoint
    {
        $this->name = $name;
        return $this;
    }

}
