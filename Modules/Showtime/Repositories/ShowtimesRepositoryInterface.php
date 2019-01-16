<?php

namespace Modules\Showtime\Repositories;
 
interface ShowtimesRepositoryInterface {
	
	public function index();
	    
    public function store(array $data);

    public function show($id);
	
}