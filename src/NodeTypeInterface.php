<?php
declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

use Doctrine\Common\Collections\Collection;

interface NodeTypeInterface extends DescribableInterface
{
    /**
     * Get node-source entity class name without its namespace.
     *
     * @return string
     */
    public function getSourceEntityClassName(): string;

    /**
     * @return string
     */
    public function getSourceEntityFullQualifiedClassName(): string;

    /**
     * Get node-source entity database table name.
     *
     * @return string
     */
    public function getSourceEntityTableName(): string;

    /**
     * Get every node-type fields names in
     * a simple array.
     *
     * @return array<string>
     */
    public function getFieldsNames(): array;

    /**
     * @return Collection<NodeTypeFieldInterface>
     */
    public function getFields(): Collection;

    /**
     * Gets the value of color.
     *
     * @return string|null
     */
    public function getColor(): ?string;

    /**
     * @return bool
     */
    public function isReachable(): bool;

    /**
     * @return bool
     */
    public function isPublishable(): bool;
}
