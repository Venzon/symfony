<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Loader;

/**
 * LoaderInterface is the interface implemented by all loader classes.
 *
 * @author Fabien Potencier <fabien.potencier@symfony-project.com>
 */
interface LoaderInterface
{
    /**
     * Loads a resource.
     *
     * @param mixed $resource The resource
     */
    function load($resource);

    /**
     * Returns true if this class supports the given resource.
     *
     * @param  mixed $resource A resource
     *
     * @return Boolean true if this class supports the given resource, false otherwise
     */
    function supports($resource);

    /**
     * Gets the loader resolver.
     *
     * @return LoaderResolver A LoaderResolver instance
     */
    function getResolver();

    /**
     * Sets the loader resolver.
     *
     * @param LoaderResolver $resolver A LoaderResolver instance
     */
    function setResolver(LoaderResolver $resolver);
}