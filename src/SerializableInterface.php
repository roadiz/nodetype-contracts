<?php
declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface SerializableInterface
{
    /**
     * Tells serializer to exclude this entity from serialization process.
     *
     * @return bool
     */
    public function isExcludedFromSerialization(): bool;

    /**
     * Prevents serializer to serialize current entity after max depth reached.
     *
     * @return int|null
     */
    public function getSerializationMaxDepth(): ?int;

    /**
     * Override default serialization groups.
     *
     * @return array
     */
    public function getSerializationGroups(): array;

    /**
     * Create a custom exclusion using Symfony expression language.
     *
     * @see https://symfony.com/doc/current/components/expression_language.html
     * @return string|null
     */
    public function getSerializationExclusionExpression(): ?string;
}
