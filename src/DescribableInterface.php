<?php
declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface DescribableInterface
{
    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @return string Human interface label
     */
    public function getLabel(): string;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return boolean
     */
    public function isVisible(): bool;
}
