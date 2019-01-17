<?php

namespace Modules\Showtime\Repositories;
 
use Illuminate\Support\ServiceProvider;
 
class ShowtimeServiceProvider extends ServiceProvider {
	
	/**
     * Binding the interface with the class repository
     */
	public function register()
	{
		$this->app->bind('Modules\Showtime\Repositories\ShowtimesRepositoryInterface', 'Modules\Showtime\Repositories\ShowtimesRepository');
	}
}