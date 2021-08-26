<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use Symfony\Component\Console\Command\Command;
use function count;
use function current;
use function in_array;
use function key;
use function next;
use function reset;

/**
 * Represents a command collection.
 * @package codekandis/console
 * @author Christian Ramelow <info@codekandis.net>
 */
class CommandCollection implements CommandCollectionInterface
{
	/**
	 * Represents the error message if a command already exists in the collection.
	 * @var string
	 */
	protected const ERROR_COMMAND_EXISTS = 'The command already exists in the collection.';

	/**
	 * Stores the internal list of commands of the collection.
	 * @var Command[]
	 */
	private array $commands = [];

	/**
	 * Constructor method.
	 * @param Command[] $commands The initial commands of the collection.
	 * @throws CommandExistsException A command already exists in the collection.
	 */
	public function __construct( Command ...$commands )
	{
		$this->add( ...$commands );
	}

	/**
	 * {@inheritDoc}
	 */
	public function count(): int
	{
		return count( $this->commands );
	}

	/**
	 * {@inheritDoc}
	 */
	public function current()
	{
		return current( $this->commands );
	}

	/**
	 * {@inheritDoc}
	 */
	public function next(): void
	{
		next( $this->commands );
	}

	/**
	 * {@inheritDoc}
	 */
	public function key()
	{
		return key( $this->commands );
	}

	/**
	 * {@inheritDoc}
	 */
	public function valid(): bool
	{
		return null !== key( $this->commands );
	}

	/**
	 * {@inheritDoc}
	 */
	public function rewind(): void
	{
		reset( $this->commands );
	}

	/**
	 * Adds commands to the collection.
	 * @param Command[] $commands The commands to add.
	 * @throws CommandExistsException A command already exists in the collection.
	 */
	private function add( Command ...$commands ): void
	{
		foreach ( $commands as $command )
		{
			if ( true === in_array( $command, $this->commands, true ) )
			{
				throw new CommandExistsException( static::ERROR_COMMAND_EXISTS );
			}

			$this->commands[] = $command;
		}
	}
}
