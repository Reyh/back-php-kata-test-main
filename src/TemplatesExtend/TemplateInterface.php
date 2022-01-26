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
    public function getPlaceHolders(): array;

    /**
     * @param array $data
     * @return array
     */
    public function loadData(array $data): array;

    /**
     * @return string
     */
    public function getPrefix(): string;
}