<?php
/**
 * @package   Pls\Data\Container
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Data\Container;

/**
 * A container, dictionary or key-value store which contains a collections of
 * values. These values are stored and retrieved using a key that uniquely
 * identifies each.
 */
interface Container
{
    /**
     * Fetches a stored value from the given key.
     *
     * @param string     $key     The unique key of a value in the container.
     * @param mixed|null $default Optional. Default value to return if $key
     *      does not exist.
     *
     * @throws ContainerException MUST be thrown if $key is not a legal value.
     *
     * @return mixed The stored value referenced by $key.
     */
    public function get(string $key, $default = null);

    /**
     * Determines whether a given key is known to the container.
     *
     * Note: `has($key)` returning `true` does not mean that `get($key)` will
     * not throw an exception. It does however mean that `get($id)` MUST NOT
     * throw a `NotFoundException` unless the container is subject to a race
     * condition (for example, it is a cache and another script has removed the
     * key or its TTL has expired between calls to `has($key)` and `get($key)`).
     *
     * @param string $key The unique key of a value in the container.
     *
     * @throws ContainerException MUST be thrown if $key is not a legal value.
     *
     * @return bool `true` if $key is known to the container, `false` otherwise.
     */
    public function has(string $key): bool;
}
