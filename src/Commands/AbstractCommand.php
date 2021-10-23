<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use Symfony\Component\Console\Command\Command;

abstract class AbstractCommand extends Command implements CommandInterface
{
	/**
	 * Represents the name of the command.
	 * @var string
	 */
	protected const COMMAND_NAME = '';

	/**
	 * Represents the aliases of the command.
	 * @var string[]
	 */
	protected const COMMAND_ALIASES = [];

	/**
	 * Represents the description of the command.
	 * @var string
	 */
	protected const COMMAND_DESCRIPTION = '';

	/**
	 * Represents the help of the command.
	 * @var string
	 */
	protected const COMMAND_HELP = '';

	/**
	 * Represents the process title of the command.
	 * @var string
	 */
	protected const COMMAND_PROCESS_TITLE = '';

	/**
	 * Represents whether the command is hidden from the list of commands.
	 * @var bool
	 */
	protected const COMMAND_HIDDEN = false;

	/**
	 * {@inheritDoc}
	 */
	protected function configure(): void
	{
		parent::configure();

		$this->setName( static::COMMAND_NAME );
		$this->setAliases( static::COMMAND_ALIASES );
		$this->setDescription( static::COMMAND_DESCRIPTION );
		$this->setHelp( static::COMMAND_HELP );
		$this->setProcessTitle( static::COMMAND_PROCESS_TITLE );
		$this->setHidden( static::COMMAND_HIDDEN );
	}
}
