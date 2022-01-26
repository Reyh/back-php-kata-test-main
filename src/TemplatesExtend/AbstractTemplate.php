<?php

namespace App\TemplatesExtend;

use App\Entity\Template;

/**
 *
 */
abstract class AbstractTemplate implements TemplateInterface
{
    abstract public function getPrefix(): string;

    abstract public function getTags(): array;

    public function isTemplated(Template $template): bool
    {
        $pattern = sprintf('/\[%s:(%s)\]/', $this->getPrefix(), implode('|', $this->getTags()));

        return (preg_match($pattern, $template->getSubject() . $template->getContent()));
    }

    /**
     * {@inheritdoc}
     */
    public function getPlaceholders(): array
    {
        $placeholders = [];

        foreach ($this->getTags() as $tag) {
            $placeholders[] = $this->composePlaceholder($tag);
        }

        return $placeholders;
    }

    /**
     * @param array $data
     * @param $placeholder
     * @param $value
     * @return void
     */
    public function addingData(array &$data, $placeholder, $value): void
    {
        $data[$this->composePlaceHolder($placeholder)] = $value;
    }

    /**
     * @param $placeholder
     * @return string
     */
    protected function composePlaceHolder($placeholder): string
    {
        return sprintf('[%s:%s]', $this->getPrefix(), $placeholder);
    }

}