<?php

namespace Modules\Cinema\Repositories;
 
interface CinemasRepositoryInterface {
	
	public function index();
	    
    //public function store(array $data);

    public function show($id);
	
}