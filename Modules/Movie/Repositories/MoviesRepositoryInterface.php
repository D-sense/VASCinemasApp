<?php

namespace Modules\Movie\Repositories;
 
interface MoviesRepositoryInterface {
	
	public function index();
	    
    public function store(array $data);

    public function show($id);
	
}