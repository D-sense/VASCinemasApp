<?php
namespace Modules\Cinema\Repositories;

use Modules\Cinema\Entities\Cinema;
use Modules\Movie\Entities\Movie;
use Modules\Showtime\Entities\Showtime;

class CinemasRepository implements CinemasRepositoryInterface {
	
	 /**
     * Get a listing of the resource.
	 * @param string $name
     * @return $showtime
     */
	public function show($name)
	{
		$id = $this->getID($name);
		$showtime = Showtime::where('cinema_id', $id)->get();
		$showtime->load('movie');
		return $showtime;
	}

	/**
     * Get an id of a resource.
     * @return $result->id
     */
	private function getID($name){
		$result = Cinema::where('name', $name)->first();
		return $result->id;
	}

}
