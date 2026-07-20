<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

use Doctrine\Common\Collections\Collection;

interface NodeTypeInterface extends DescribableInterface, SearchableInterface
{
    /**
     * Get node-source entity class name without its namespace.
     *
     * @deprecated use NodeTypeClassLocatorInterface::getSourceEntityClassName instead
     */
    public function getSourceEntityClassName(): string;

    /**
     * @return class-string
     *
     * @deprecated use NodeTypeClassLocatorInterface::getSourceEntityFullQualifiedClassName instead
     */
    public function getSourceEntityFullQualifiedClassName(): string;

    /**
     * Get node-source entity database table name.
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
     * @return Collection<NodeTypeFieldInterface>
     */
    public function getSearchableFields(): Collection;

    public function getFieldByName(string $name): ?NodeTypeFieldInterface;

    /**
     * Gets the value of color.
     */
    public function getColor(): ?string;

    public function isReachable(): bool;

    public function isPublishable(): bool;

    public function isUnpublishable(): bool;
}
