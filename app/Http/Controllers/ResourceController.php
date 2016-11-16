<?php

namespace App\Http\Controllers;

use App\Product;
use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $resources = \App\Resource::all($id);
        $data['resources'] = $resources;

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

        $resource = \App\Resource::findOrFail($id);
        $data['resource'] = $resource;
        return view('products/show', $data);
    }

    public function new_resource()
    {
        //
        return view('products/add');
    }

    public function add(Request $request)
    {
        if($_FILES['resource']['size'] != 0) {
            $resource = new resource;
            $request->resource->move(public_path('images'),"resource_new.jpg");
            $resource->type = $request->input('name');
            $resource->img = 'resource_new.jpg';
            $resource->Save();
        }
        return redirect('home');
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
        //

        if($_FILES['resource']['size'] != 0){

            $request->resource->move(public_path('images'),"resource_$id.jpg");
            $resource = \App\Resource::findOrFail($id);
            $resource->img = "resource_$id.jpg";
            $resource->Save();
        }
        elseif ($request->input('type') != null){
            $resource = \App\Resource::findOrFail($id);
            $resource->type = $request->input('type');
            $resource->save();
        }
        return redirect('home');
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
            $resource = \App\Resource::findOrFail($id);
            $resource->delete();
        }
        return redirect('home');
    }
}