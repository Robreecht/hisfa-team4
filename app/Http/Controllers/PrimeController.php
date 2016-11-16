<?php

namespace App\Http\Controllers;

use App\Prime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PrimeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $primes = \App\Prime::all($id);
        $data['primes'] = $primes;

    }
    
    public function addprime(Request $request)
    {
        $prime = new prime;

        
        $prime->name = $request->input('primesiloname');
        $prime->resource_id = Input::get('primeresource');
        $prime->Save();
        
        return redirect('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $prime = \App\Prime::findOrFail($id);
        $data['prime'] = $prime;
        return view('products/prime',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(isset($_POST['delete'])) {
            $prime = \App\Prime::findOrFail($id);
            $prime->delete();
        }
        return redirect('home');
    }
}