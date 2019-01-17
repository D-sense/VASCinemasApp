<?php

namespace Modules\Cinema\Repositories;
 
use Illuminate\Support\ServiceProvider;
 
class CinemaServiceProvider extends ServiceProvider {
	
	/**
     * Binding the interface with the class repository
     */
	public function register()
	{
		$this->app->bind('Modules\Cinema\Repositories\CinemasRepositoryInterface', 'Modules\Cinema\Repositories\CinemasRepository');
	}
}