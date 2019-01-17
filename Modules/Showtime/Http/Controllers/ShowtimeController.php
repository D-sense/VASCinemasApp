<?php

namespace Modules\Showtime\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        try{
            return view('showtime::index');

        }catch(\Exception $error){
            return Custom::returnResponseWithErrorMessage($error);
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        try{
            return view('showtime::show');

        }catch(\Exception $error){
            return Custom::returnResponseWithErrorMessage($error);
        }
    }

    
}
