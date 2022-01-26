<?php

namespace App\TemplatesExtend;

use App\Entity\Learner;
use App\Entity\Template;
use App\Helper\SingletonTrait;
use App\Context\ApplicationContext;

/**
 *
 */
class LearnerTemplate extends AbstractTemplate
{
    use SingletonTrait;

    private const PLACE_HOLDER_FIRST_NAME = "first_name";

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return [self::PLACE_HOLDER_FIRST_NAME];
    }

    /** Loads all the tags contained in the template
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array
    {
        $user = ApplicationContext::getInstance()->getCurrentUser();

        $this->addingData($data, self::PLACE_HOLDER_FIRST_NAME, $user->getFirstname());

        return $data;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return 'user';
    }

}