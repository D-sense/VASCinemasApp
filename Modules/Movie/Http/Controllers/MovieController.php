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
      $this->middleware('auth');
      $this->movieRepository = $movieRepository;
   }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $movies = $this->movieRepository->index();
        return view('movie::index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('movie::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request = $request->all();
        $request['user_id'] = Auth::user()->id;
        $this->movieRepository->store($request);

        return redirect(route('show_all_movies'));
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $movie = $this->movieRepository->show($id);
        return view('movie::show', compact('movie'));
    }
}
