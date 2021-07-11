<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use LogicException;

/**
 * Represents an exception if a command already exists.
 * @package codekandis/console
 * @author Christian Ramelow <info@codekandis.net>
 */
class CommandExistsException extends LogicException
{
}
