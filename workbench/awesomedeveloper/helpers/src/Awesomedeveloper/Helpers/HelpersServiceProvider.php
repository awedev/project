<?php namespace Awesomedeveloper\Helpers;

use Illuminate\Support\ServiceProvider;
use Awesomedeveloper\Helpers;

class HelpersServiceProvider extends ServiceProvider {

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
		$this->package('awesomedeveloper/helpers');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->registerHelper();

	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
	/**
	 * Register Helper
	 *
	 * @return void
	 */
	public function registerHelper(){
		$this->app->bind('helper', function()
		{
			return new Helper;
		});
	}
}
