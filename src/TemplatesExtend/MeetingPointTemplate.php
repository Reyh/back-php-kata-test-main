<?php

namespace App\TemplatesExtend;

use App\Entity\Lesson;
use App\Helper\SingletonTrait;
use App\Repository\MeetingPointRepository;

/**
 *
 */
class MeetingPointTemplate extends AbstractTemplate
{
    use SingletonTrait;

    private const PLACE_HOLDER_MEETING_POINT = "name";

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return [self::PLACE_HOLDER_MEETING_POINT];
    }

    /** Loads all the tags contained in the template
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array
    {
        $lesson = (isset($data['lesson']) and $data['lesson'] instanceof Lesson) ? $data['lesson'] : null;

        if ($lesson && $meetingPoint = MeetingPointRepository::getInstance()->getById($lesson->getMeetingPointId())) {
            $this->addingData($data, self::PLACE_HOLDER_MEETING_POINT, $meetingPoint->getName());
        }

        return $data;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return 'lesson';
    }

}