<?php

namespace Modules\Movie\Repositories;
 
use Illuminate\Support\ServiceProvider;
 
class MovieServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->app->bind('Modules\Movie\Repositories\MoviesRepositoryInterface', 'Modules\Movie\Repositories\MoviesRepository');
	}
}