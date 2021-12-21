<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use Symfony\Component\Console\Command\Command;

abstract class AbstractCommand extends Command implements CommandInterface
{
	/**
	 * Defines the name of the command.
	 * @var string
	 */
	protected const COMMAND_NAME = '';

	/**
	 * Defines the aliases of the command.
	 * @var string[]
	 */
	protected const COMMAND_ALIASES = [];

	/**
	 * Defines the description of the command.
	 * @var string
	 */
	protected const COMMAND_DESCRIPTION = '';

	/**
	 * Defines the help of the command.
	 * @var string
	 */
	protected const COMMAND_HELP = '';

	/**
	 * Defines the process title of the command.
	 * @var string
	 */
	protected const COMMAND_PROCESS_TITLE = '';

	/**
	 * Defines whether the command is hidden from the list of commands.
	 * @var bool
	 */
	protected const COMMAND_HIDDEN = false;

	/**
	 * Defines the command options.
	 * @var array
	 */
	protected const COMMAND_OPTIONS = [];

	/**
	 * Defines the command arguments.
	 * @var array
	 */
	protected const COMMAND_ARGUMENTS = [];

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

		foreach ( static::COMMAND_OPTIONS as $commandOption )
		{
			$this->addOption(
				$commandOption[ 'name' ],
				$commandOption[ 'shortcut' ] ?? null,
				$commandOption[ 'mode' ] ?? null,
				$commandOption[ 'description' ] ?? '',
				$commandOption[ 'defaultValue' ] ?? null
			);
		}

		foreach ( static::COMMAND_ARGUMENTS as $commandArgument )
		{
			$this->addArgument(
				$commandArgument[ 'name' ],
				$commandArgument[ 'mode' ] ?? null,
				$commandArgument[ 'description' ] ?? '',
				$commandArgument[ 'defaultValue' ] ?? null
			);
		}
	}
}
