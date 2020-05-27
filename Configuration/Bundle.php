<?php

namespace Atoum\AtoumBundle\Configuration;

/**
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class Bundle
{
    protected string $name;

    protected array $directories = [];

    /**
     * @param string $name name
     * @param string[] $directories directories
     */
    public function __construct(string $name, array $directories)
    {
        $this->name = $name;
        $this->directories = $directories;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }
}
