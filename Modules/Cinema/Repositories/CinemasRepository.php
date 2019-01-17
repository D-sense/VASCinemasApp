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
		try{
			$id = (int) $this->getID($name);
			//return $id;
			$showtime = Showtime::where('cinema_id', $id)->get();
			if(!$showtime){
				return 0;
			}
			//$showtime->load('movie');
			return $showtime;

        }catch(\Exception $error){
            return $error;
		}
	}

	/**
     * Get an id of a resource.
     * @return $result->id
     */
	private function getID($name){
		try{
			$result = Cinema::where('name', $name)->first();
		    return $result->id;

        }catch(\Exception $error){
            return $error;
		}
	}

}
