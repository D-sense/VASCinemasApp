<?php
namespace Modules\Movie\Repositories;

use Modules\Movie\Entities\Movie;
use Auth;

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
		$movie->year = $data['year'];
		$movie->country = $data['country'];
		$movie->director_name = $data['director_name'];
		$movie->image = $this->uploadImage($image);
		$movie->description = $data['description'];
		$movie->user_id = $data['user_id'];

		$movie->save();
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
