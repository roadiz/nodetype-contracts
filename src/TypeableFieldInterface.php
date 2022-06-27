<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface TypeableFieldInterface
{
    /**
     * @return string|int Type identifier for Roadiz to Doctrine mapping
     */
    public function getType();

    /**
     * @return string
     */
    public function getTypeName(): string;

    /**
     * @return string
     */
    public function getDoctrineType(): string;

    /**
     * @return bool
     */
    public function isString(): bool;

    /**
     * @return bool
     */
    public function isText(): bool;

    /**
     * @return bool
     */
    public function isDate(): bool;

    /**
     * @return bool
     */
    public function isDateTime(): bool;

    /**
     * @return bool
     */
    public function isRichText(): bool;

    /**
     * @return bool
     */
    public function isMarkdown(): bool;

    /**
     * @return bool
     */
    public function isBool(): bool;

    /**
     * @return bool
     */
    public function isInteger(): bool;

    /**
     * @return bool
     */
    public function isDecimal(): bool;

    /**
     * @return bool
     */
    public function isEmail(): bool;

    /**
     * @return bool
     */
    public function isDocuments(): bool;

    /**
     * @return bool
     */
    public function isPassword(): bool;

    /**
     * @return bool
     */
    public function isColor(): bool;

    /**
     * @return bool
     */
    public function isGeoTag(): bool;

    /**
     * @return bool
     */
    public function isNodes(): bool;

    /**
     * @return bool
     */
    public function isUser(): bool;

    /**
     * @return bool
     */
    public function isEnum(): bool;

    /**
     * @return bool
     */
    public function isChildrenNodes(): bool;

    /**
     * @return bool
     */
    public function isCustomForms(): bool;

    /**
     * @return bool
     */
    public function isMultiple(): bool;

    /**
     * @return bool
     */
    public function isMultiGeoTag(): bool;

    /**
     * @return bool
     */
    public function isJson(): bool;

    /**
     * @return bool
     */
    public function isYaml(): bool;

    /**
     * @return bool
     */
    public function isCss(): bool;

    /**
     * @return bool
     */
    public function isManyToMany(): bool;

    /**
     * @return bool
     */
    public function isManyToOne(): bool;

    /**
     * @return bool
     */
    public function isCountry(): bool;

    /**
     * @return bool
     */
    public function isSingleProvider(): bool;

    /**
     * @return bool
     */
    public function isMultiProvider(): bool;

    /**
     * @return bool
     */
    public function isCollection(): bool;
}
