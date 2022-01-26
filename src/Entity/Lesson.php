<?php

namespace App\Entity;

use DateTime;

class Lesson
{
    public int $id;
    public int $meetingPointId;
    public int $instructorId;
    public DateTime $start_time;
    public DateTime $end_time;

    public function __construct(int $id, int $meetingPointId, int $instructorId, DateTime $start_time, DateTime  $end_time)
    {
        $this->id = $id;
        $this->meetingPointId = $meetingPointId;
        $this->instructorId = $instructorId;
        $this->start_time = $start_time;
        $this->end_time = $end_time;
    }

    public static function renderHtml(Lesson $lesson): string
    {
        return '<p>' . $lesson->id . '</p>';
    }

    public static function renderText(Lesson $lesson): string
    {
        return (string) $lesson->id;
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
     * @return Lesson
     */
    public function setId(int $id): Lesson
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getMeetingPointId(): int
    {
        return $this->meetingPointId;
    }

    /**
     * @param int $meetingPointId
     * @return Lesson
     */
    public function setMeetingPointId(int $meetingPointId): Lesson
    {
        $this->meetingPointId = $meetingPointId;
        return $this;
    }

    /**
     * @return int
     */
    public function getInstructorId(): int
    {
        return $this->instructorId;
    }

    /**
     * @param int $instructorId
     * @return Lesson
     */
    public function setInstructorId(int $instructorId): Lesson
    {
        $this->instructorId = $instructorId;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartTime(): DateTime
    {
        return $this->start_time;
    }

    /**
     * @param DateTime $start_time
     * @return Lesson
     */
    public function setStartTime(DateTime $start_time): Lesson
    {
        $this->start_time = $start_time;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEndTime(): DateTime
    {
        return $this->end_time;
    }

    /**
     * @param DateTime $end_time
     * @return Lesson
     */
    public function setEndTime(DateTime $end_time): Lesson
    {
        $this->end_time = $end_time;
        return $this;
    }


}