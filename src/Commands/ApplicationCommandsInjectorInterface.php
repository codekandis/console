<?php declare( strict_types = 1 );
namespace CodeKandis\Console\Commands;

/**
 * Represents the interface of any application command injector.
 * @package medialogistik/auto-form
 * @author Christian Ramelow <info@codekandis.net>
 */
interface ApplicationCommandsInjectorInterface
{
	/**
	 * Injects a collection of commands into the application.
	 * @param CommandCollectionInterface $commands The collection of commands to inject.
	 */
	public function inject( CommandCollectionInterface $commands ): void;
}
