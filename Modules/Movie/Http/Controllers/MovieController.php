<?php

namespace Modules\Movie\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
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
            return Custom::returnResponseWithErrorMessage($error);
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
            return Custom::returnResponseWithErrorMessage($error);
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
            return Custom::returnResponseWithErrorMessage($error);
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
    
            return redirect(route('show_all_movies'));

        }catch(\Exception $error){
            return Custom::returnResponseWithErrorMessage($error);
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
            return Custom::returnResponseWithErrorMessage($error);
        }
    }
}
