<?php

namespace Atoum\AtoumBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Atoum\AtoumBundle\DependencyInjection\Compiler\BundleDirectoriesResolverPass;

/**
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class AtoumBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new BundleDirectoriesResolverPass());
    }
}
