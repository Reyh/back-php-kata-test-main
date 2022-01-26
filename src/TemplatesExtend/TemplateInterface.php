<?php

namespace App\TemplatesExtend;

use App\Entity\Template;

/**
 *
 */
interface TemplateInterface
{
    /**
     * @return array
     */
    public function getTags(): array;

    /**
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array;

    /**
     * @return string
     */
    public function getPrefix(): string;

    /**
     * @return string
     */
    public function isTemplated(Template $template): bool;
}