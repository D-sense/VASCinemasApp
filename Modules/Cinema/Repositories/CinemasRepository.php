<?php
namespace Modules\Cinema\Repositories;

use Modules\Cinema\Entities\Cinema;
use Modules\Movie\Entities\Movie;
use Modules\Showtime\Entities\Showtime;

class CinemasRepository implements CinemasRepositoryInterface {
	
	public function show($name)
	{
		$id = $this->getID($name);
		$showtime = Showtime::where('cinema_id', $id)->get();
		$showtime->load('movie');
		return $showtime;
	}

	private function getID($name){
		$result = Cinema::where('name', $name)->first();
		return $result->id;
	}

}
