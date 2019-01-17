<?php

namespace Modules\Cinema\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Cinema\Repositories\CinemasRepositoryInterface;


class CinemaController extends Controller
{
    protected $cinemaRepository;

   public function __construct(CinemasRepositoryInterface $cinemaRepository)
   {
      $this->middleware('auth');
      $this->cinemaRepository = $cinemaRepository;
   }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $cinemas = $this->cinemaRepository->index();
        return view('cinema::index', compact('cinemas'));
    }


    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($name)
    {
        $cinema = $this->cinemaRepository->show($name);
        return view('cinema::show', compact('cinema'));
    }

}
