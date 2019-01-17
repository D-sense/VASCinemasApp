<?php
namespace Modules\Showtime\Repositories;

use Modules\Showtime\Entities\Showtime;
use Auth;

class ShowtimesRepository implements ShowtimesRepositoryInterface {
	
	/**
     * Display a listing of the resource.
     * @return Collection
     */
	public function index()
	{
		try{
			return Showtime::all();
			
        }catch(\Exception $error){
            return Custom::returnResponseWithErrorMessage($error);
        }
	}
	

	/**
     * Store a newly created resource in storage.
     * @param  Request $data
     */
	public function store(array $data)
	{
		try{
			$showtime = new Showtime();

			$showtime->cinema_id = $data['cinema_id'];
			$showtime->movie_id = $data['movie_id'];
			$showtime->show_date = $data['show_date'];
			$showtime->show_time = $data['show_time'];
			
			$showtime->save();
			
        }catch(\Exception $error){
            return Custom::returnResponseWithErrorMessage($error);
		}	
	}


	/**
     * Get a listing of the resource.
	 * @param integer $id
     * @return resource
     */
	public function show($id)
	{
		try{
			return Cinema::findOrFail($id);

        }catch(\Exception $error){
            return Custom::returnResponseWithErrorMessage($error);
		}
	}
}
