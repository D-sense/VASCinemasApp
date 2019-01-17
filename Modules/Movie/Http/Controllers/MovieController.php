<?php

namespace Modules\Movie\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use Validator;
use Modules\Movie\Repositories\MoviesRepositoryInterface;

class MovieController extends Controller
{
   protected $movieRepository;

   public function __construct(MoviesRepositoryInterface $movieRepository)
   {
        try{
            $this->middleware('auth');
            $this->movieRepository = $movieRepository;
            
        }catch(\Exception $error){
            return $error;
        }  
   }


    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index()
    {
        try{
            $movies = $this->movieRepository->index();
            return view('movie::index', compact('movies'));

        }catch(\Exception $error){
            return $error;
        }  
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create()
    {
        try{
            return view('movie::create');

        }catch(\Exception $error){
            return $error;
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return View
     */
    public function store(Request $request)
    {
        try{
            $request = $request->all();
            $request['user_id'] = Auth::user()->id;
            $this->movieRepository->store($request);
    
            $validator = $this->validator($request, $this->rules);

            if($validator->fails()){
				return redirect(route('show_form_movie'))->withErrors($validator)->withInput();
			}
            return redirect(route('show_all_movies'));

        }catch(\Exception $error){
            return $error;
        }
    }

    /**
     * Show the specified resource.
     * @return View
     */
    public function show($id)
    {
        try{
            $movie = $this->movieRepository->show($id);
            return view('movie::show', compact('movie'));

        }catch(\Exception $error){
            return $error;
        }
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validator(array $data, $rules)
    {
        return Validator::make($data, $rules);
    }


    private $rules = [
        'image' => 'required|mimes:jpeg,png,jpg||max:2000',
        'title' => 'required',
        'length' => 'required|string',
        'released_date' => 'required|date',
        'country' => 'required',
        'director_name' => 'required',
        'description' => 'required',
        'ozone_show_time' => 'required',
        'ozone_show_date' => 'required|date',
        'filmhouse_show_time' => 'required',
        'filmhouse_show_date' => 'required|date',
        'ground_zero_show_time' => 'required',
        'ground_zero_show_date' => 'required|date',
    ];
}
