<?php
declare(strict_types=1);

namespace RZ\Roadiz\Contracts\NodeType;

interface NodeTypeResolverInterface
{
    /**
     * @param string $nodeTypeName
     * @return NodeTypeInterface|null
     */
    public function get(string $nodeTypeName);
}
