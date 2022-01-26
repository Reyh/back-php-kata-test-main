<?php

namespace App\TemplatesExtend;

use App\Entity\Template;

/**
 *
 */
abstract class AbstractTemplate implements TemplateInterface
{
    /**
     * @return string
     */
    abstract public function getPrefix(): string;

    /**
     * @return array
     */
    abstract public function getTags(): array;

    /** Check if the pattern is used in the text
     * @param Template $template
     * @return bool
     */
    public function isTemplated(Template $template): bool
    {
        $pattern = sprintf('/\[%s:(%s)\]/', $this->getPrefix(), implode('|', $this->getTags()));

        return (preg_match($pattern, $template->getSubject() . $template->getContent()));
    }

    /** Put all the tags in an array
     * @param array $data
     * @param $placeholder
     * @param $value
     * @return void
     */
    public function addingData(array &$data, $placeholder, $value): void
    {
        $data[$this->composePlaceHolder($placeholder)] = $value;
    }

    /** Generate the tag
     * @param $placeholder
     * @return string
     */
    protected function composePlaceHolder($placeholder): string
    {
        return sprintf('[%s:%s]', $this->getPrefix(), $placeholder);
    }

}