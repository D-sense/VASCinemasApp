<?php
namespace Modules\Cinema\Repositories;

use Modules\Cinema\Entities\Cinema;
use Auth;

class CinemasRepository implements CinemasRepositoryInterface {
	
	public function index()
	{
		return Cinema::all();
	}
	
	// public function store(array $data)
	// {
	// 	$cinema = new Cinema();
	// 	$cinema->name = $data['name'];
	// 	$cinema->address = "Lagos";
	// 	$cinema->save();
	// }


	public function show($id)
	{
		return Cinema::findOrFail($id);
	}

	//  /**
    //  * Upload an image to the Database.
    //  *
    //  * @return path of the image
    //  */

    // public function uploadImage($image){
    //     $current_user =  new Auth();
    //     $path = "";
    //     if($image){
    //         $name = $image->getClientOriginalName();
    //         $protectedName = $current_user::User()->username ."_".$name;
    //         $path = $image->storeAs('public/MovieImageCovers', $protectedName);
    //     }     
    //     return $path; 
    // }
}
