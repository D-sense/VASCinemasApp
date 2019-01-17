<?php
namespace Modules\Movie\Repositories;

use Modules\Movie\Entities\Movie;
use Auth;
use Modules\Cinema\Repositories\CinemasRepository;
use Modules\Showtime\Repositories\ShowtimesRepository;

class MoviesRepository implements MoviesRepositoryInterface {
	
	public function index()
	{
		return Movie::all();
	}
	
	public function store(array $data)
	{
		$movie = new Movie();
		$image = request()->file('image');
	
		$movie->title = $data['title'];
		$movie->length = $data['length'];
		$movie->released_date = $data['released_date'];
		$movie->country = $data['country'];
		$movie->director_name = $data['director_name'];
		$movie->image = $this->uploadImage($image);
		$movie->description = $data['description'];
		$movie->user_id = $data['user_id'];
		$movie->save();

		$showtime = new ShowtimesRepository();
		$showtimes_data = [];
		$showtimes_data["cinema_id"] = $data['ozone_id'];
		$showtimes_data["movie_id"] =  $movie->id;
		$showtimes_data["show_date"] = $data['ozone_show_date'];
		$showtimes_data["show_time"] = $data['ozone_show_time'];
		$showtime->store($showtimes_data);

		$showtimes_data["cinema_id"] = $data['filmhouse_id'];
		$showtimes_data["movie_id"] =  $movie->id;
		$showtimes_data["show_date"] = $data['filmhouse_show_date'];
		$showtimes_data["show_time"] = $data['filmhouse_show_time'];
		$showtime->store($showtimes_data);

		$showtimes_data["cinema_id"] = $data['ground_zero_id'];
		$showtimes_data["movie_id"] =  $movie->id;
		$showtimes_data["show_date"] = $data['ground_zero_show_date'];
		$showtimes_data["show_time"] = $data['ground_zero_show_time'];
		$showtime->store($showtimes_data);
	}

	public function show($id)
	{
		return Movie::findOrFail($id);
	}

	 /**
     * Upload an image to the Database.
     *
     * @return path of the image
     */

    public function uploadImage($image){
        $current_user =  new Auth();
        $path = "";
        if($image){
            $name = $image->getClientOriginalName();
            $protectedName = $current_user::User()->username ."_".$name;
            $path = $image->storeAs('public/MovieImageCovers', $protectedName);
        }     
        return $path; 
    }
}
