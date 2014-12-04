<?php namespace Imzoke\Hashids;

class Facade extends \Illuminate\Support\Facades\Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return object
	 */
	protected static function getFacadeAccessor() { return 'Hashids\Hashids'; }
}
