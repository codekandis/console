<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

use Symfony\Component\Console\Application;

/**
 * Represents the interface of any application command injector.
 * @package medialogistik/auto-form
 * @author Christian Ramelow <info@codekandis.net>
 */
class ApplicationCommandsInjector implements ApplicationCommandsInjectorInterface
{
	/**
	 * Stores the application to inject the commands into.
	 * @var Application
	 */
	private Application $application;

	/**
	 * Constructor method.
	 * @param Application $application The application to inject the commands into.
	 */
	public function __construct( Application $application )
	{
		$this->application = $application;
	}

	/**
	 * {@inheritDoc}
	 */
	public function inject( CommandCollectionInterface $commands ): void
	{
		foreach ( $commands as $command )
		{
			$this->application->add( $command );
		}
	}
}
