<?php namespace Imzoke\Hashids;

use Hashids\Hashids;
use Illuminate\Support\ServiceProvider;

class HashidsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('imzoke/laravel-hashids');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Hashids\Hashids', function ($app) {
			return new Hashids(
				$app['config']['app.key'],
				$app['config']['laravel-hashids::length'],
				$app['config']['laravel-hashids::alphabet']
			);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Hashids\Hashids');
	}

}
