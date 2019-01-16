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
		$movie = new Showtime();
		$image = request()->file('image');
	
		$movie->title = $data['title'];
		
		$movie->save();
	}

	public function show($id)
	{
		return Cinema::findOrFail($id);
	}
}
