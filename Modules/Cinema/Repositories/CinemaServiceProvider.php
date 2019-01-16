<?php

namespace Modules\Cinema\Repositories;
 
use Illuminate\Support\ServiceProvider;
 
class CinemaServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->app->bind('Modules\Cinema\Repositories\CinemasRepositoryInterface', 'Modules\Cinema\Repositories\CinemasRepository');
	}
}