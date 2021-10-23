<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use Psr\Log\LoggerInterface;

/**
 * Represents the base class of any command able to log messages.
 * @package medialogistik/auto-form
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class LoggableCommand extends AbstractCommand implements LoggableCommandInterface
{
	/**
	 * Stores the logger of the command.
	 * @var LoggerInterface
	 */
	protected LoggerInterface $logger;

	/**
	 * Constructor method.
	 * @param LoggerInterface $logger The logger of the command.
	 * @param ?string $name The name of the command.
	 */
	public function __construct( LoggerInterface $logger, ?string $name = null )
	{
		parent::__construct( $name );

		$this->logger = $logger;
	}
}
