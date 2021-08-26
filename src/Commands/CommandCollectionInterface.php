<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use Countable;
use Iterator;
use Symfony\Component\Console\Command\Command;

/**
 * Represents the interface of any command collection.
 * @package codekandis/console
 * @author Christian Ramelow <info@codekandis.net>
 */
interface CommandCollectionInterface extends Countable, Iterator
{
	/**
	 * Gets the count of commands of the collection.
	 * @return int The count of commands of the collection.
	 */
	public function count(): int;

	/**
	 * Gets the current command.
	 * @return Command The current command.
	 */
	public function current();

	/**
	 * Moves the internal pointer to the next command.
	 */
	public function next(): void;

	/**
	 * Gets the key of the current command.
	 * @return null|bool|float|int|string The key of the current command, null if the internal pointer does not point to any command.
	 */
	public function key();

	/**
	 * Determines if the current internal pointer position is valid.
	 * @return bool True if the current internal pointer position is valid, otherwise false.
	 */
	public function valid(): bool;

	/**
	 * Rewinds the internal pointer.
	 */
	public function rewind(): void;
}
