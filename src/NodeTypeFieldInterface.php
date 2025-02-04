<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface NodeTypeFieldInterface extends TypeableFieldInterface, DescribableInterface, SearchableInterface
{
    /**
     * @return string|null
     */
    public function getPlaceholder(): ?string;

    /**
     * @return string|null
     */
    public function getDefaultValues(): ?string;

    /**
     * @return string Camel case field name
     */
    public function getVarName(): string;

    /**
     * @return string Camel case getter method name
     */
    public function getGetterName(): string;

    /**
     * @return string Camel case setter method name
     */
    public function getSetterName(): string;

    /**
     * @return string|null
     */
    public function getGroupName(): ?string;

    /**
     * @return string|null
     */
    public function getGroupNameCanonical(): ?string;

    /**
     * @return bool
     */
    public function isExpanded(): bool;

    /**
     * @return string
     */
    public function getNodeTypeName(): string;

    /**
     * @return int|null
     */
    public function getMinLength(): ?int;

    /**
     * @return int|null
     */
    public function getMaxLength(): ?int;

    /**
     * @return bool
     */
    public function isIndexed(): bool;

    /**
     * Is node type field virtual, it's just an association, no doctrine field created.
     *
     * @return bool
     */
    public function isVirtual(): bool;

    /**
     * Tells if current field should sync its values between translations.
     *
     * @return bool
     */
    public function isUniversal(): bool;
}
