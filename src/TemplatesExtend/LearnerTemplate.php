<?php

namespace App\TemplatesExtend;

use App\Entity\Learner;
use App\Entity\Template;
use App\Helper\SingletonTrait;
use App\Context\ApplicationContext;

/**
 *
 */
class LearnerTemplate implements TemplateInterface
{
    use SingletonTrait;

    /**
     *
     */
    private const PLACE_HOLDER_FIRST_NAME = "first_name";

    /**
     * @return string[]
     */
    public function getPlaceHolders(): array
    {
        return [self::PLACE_HOLDER_FIRST_NAME];
    }

    /**
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array
    {
        $data = [];

        $user = ApplicationContext::getInstance()->getCurrentUser();

        $this->addingData($data, self::PLACE_HOLDER_FIRST_NAME, $user->firstname);

        return $data;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return 'user';
    }

    /*
     * TODO: à sortir probablement
     */
    /**
     * @param array $data
     * @param $placeholder
     * @param $value
     * @return void
     */
    public function addingData(array &$data, $placeholder, $value): void
    {
        $data[$this->composerPlaceHolder($placeholder)] = $value;
    }

    /*
     * TODO: à sortir probablement
     */
    /**
     * @param $placeholder
     * @return string
     */
    private function composerPlaceHolder($placeholder): string
    {
        return sprintf('[%s:%s]', $this->getPrefix(), $placeholder);
    }
}