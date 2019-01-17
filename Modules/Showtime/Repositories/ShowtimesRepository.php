<?php
namespace Modules\Showtime\Repositories;

use Modules\Showtime\Entities\Showtime;
use Auth;

class ShowtimesRepository implements ShowtimesRepositoryInterface {
	
	public function index()
	{
		return Showtime::all();
	}
	
	public function store(array $data)
	{
		$showtime = new Showtime();

		$showtime->cinema_id = $data['cinema_id'];
		$showtime->movie_id = $data['movie_id'];
		$showtime->show_date = $data['show_date'];
		$showtime->show_time = $data['show_time'];
		
		$showtime->save();
	}

	public function show($id)
	{
		return Cinema::findOrFail($id);
	}
}
