<?php

declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface SearchableInterface
{
    /**
     * Tells if current entity can be searched and indexed in a Search engine server.
     *
     * @return boolean
     */
    public function isSearchable(): bool;
}
