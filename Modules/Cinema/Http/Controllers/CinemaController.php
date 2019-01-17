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
        try{
            $this->middleware('auth');
            $this->cinemaRepository = $cinemaRepository;
            
        }catch(\Exception $error){
            return $error;
        }
   }

    /**
     * Display a listing of the resource.
     * @return View
     */
    // public function index()
    // {
    //     try{
    //         $cinemas = $this->cinemaRepository->index();
    //         return view('cinema::index', compact('cinemas'));

    //     }catch(\Exception $error){
    //         return $error;
    //     }
    // }


    /**
     * Show the specified resource.
     * @return View
     */
    public function show($name)
    {
        try{
            $cinema = $this->cinemaRepository->show($name);
            //return $cinema;
            if($cinema->isEmpty()){
                //return "IT IS EMPTY";
                $data = 0;
                return view('cinema::show', compact('data'));
            }
           // return "there are data";
            return view('cinema::show', compact('cinema'));

        }catch(\Exception $error){
            return $error;
        }
    }

}
