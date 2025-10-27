<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface NodeTypeClassLocatorInterface
{
    /**
     * Get node-source entity class name without its namespace.
     */
    public function getSourceEntityClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get repository class name without its namespace.
     */
    public function getRepositoryClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get fully qualified node-source entity class name.
     *
     * @return class-string
     */
    public function getSourceEntityFullQualifiedClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get fully qualified repository class name.
     *
     * @return class-string
     */
    public function getRepositoryFullQualifiedClassName(NodeTypeInterface $nodeType): string;

    /**
     * Get class namespace.
     */
    public function getClassNamespace(): string;

    /**
     * Get repository namespace.
     */
    public function getRepositoryNamespace(): string;
}
