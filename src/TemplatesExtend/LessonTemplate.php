<?php

namespace App\TemplatesExtend;

use App\Entity\Lesson;
use App\Helper\SingletonTrait;
use App\Repository\LessonRepository;
use App\Repository\MeetingPointRepository;

/**
 *
 */
class LessonTemplate extends AbstractTemplate
{
    use SingletonTrait;

    private const PLACE_HOLDER_START_DATE = "start_date";
    private const PLACE_HOLDER_START_TIME = "start_time";
    private const PLACE_HOLDER_END_TIME = "end_time";
    private const PLACE_HOLDER_SUMMARY = "summary";
    private const PLACE_HOLDER_SUMMARY_HTML = "summary_html";

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return [
            self::PLACE_HOLDER_START_DATE,
            self::PLACE_HOLDER_START_TIME,
            self::PLACE_HOLDER_END_TIME,
            self::PLACE_HOLDER_SUMMARY,
            self::PLACE_HOLDER_SUMMARY_HTML
        ];
    }

    /** Loads all the tags contained in the template
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array
    {
        $lesson = (isset($data['lesson']) and $data['lesson'] instanceof Lesson) ? $data['lesson'] : null;

        if ($lesson) {
            $this->addingData($data, self::PLACE_HOLDER_START_DATE, $lesson->getStartTime()->format('d/m/Y'));
            $this->addingData($data, self::PLACE_HOLDER_START_TIME, $lesson->getStartTime()->format('H:i'));
            $this->addingData($data, self::PLACE_HOLDER_END_TIME, $lesson->getEndTime()->format('H:i'));
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