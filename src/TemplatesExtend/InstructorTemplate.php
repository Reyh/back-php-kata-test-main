<?php

namespace App\TemplatesExtend;

use App\Entity\Lesson;
use App\Helper\SingletonTrait;
use App\Repository\InstructorRepository;

/**
 *
 */
class InstructorTemplate extends AbstractTemplate
{
    use SingletonTrait;

    private const PLACE_HOLDER_INSTRUCTOR_NAME = "instructor_name";

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return [self::PLACE_HOLDER_INSTRUCTOR_NAME];
    }

    /** Loads all the tags contained in the template
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array
    {
        $lesson = (isset($data['lesson']) and $data['lesson'] instanceof Lesson) ? $data['lesson'] : null;

        if ($lesson && $instructor = InstructorRepository::getInstance()->getById($lesson->getInstructorId())) {
            $this->addingData($data, self::PLACE_HOLDER_INSTRUCTOR_NAME, $instructor->getFirstname());
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