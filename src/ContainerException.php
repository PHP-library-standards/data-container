<?php
/**
 * @package   Pls\Data\Container
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Data\Container;

use Throwable;

/**
 * Base exception interface for all types of data container exceptions.
 *
 * This interface MUST be implemented by all exceptions thrown by a `Container`
 * implementation.
 */
interface ContainerException extends Throwable
{
}
