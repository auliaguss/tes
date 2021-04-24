<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Place::all();
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
        $response = Place::create($request->all());
        if ($response == 200) {
            return "create success";
        } else if ($response == 401) {
            return "Unauthorized user";
        } else if ($response == 422) {
            return "Data cannot be processed";
        }
        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Place::find($id);
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
        $response = Place::where("id", $id)
            ->update([
                'name' => $request->name,
                'latitude' => $request->latitude,
                'longtitude' => $request->longtitude,
                'x' => $request->x,
                'y' => $request->y,
                'description' => $request->description,

            ]);

        $response = Place::create($request->all());
        if ($response == 200) {
            return "update success";
        } else if ($response == 401) {
            return "Unauthorized user";
        } else if ($response == 422) {
            return "Data cannot be updated";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Place::destroy($id);
        if ($response == 200) {
            return "delete success";
        } else if ($response == 401) {
            return "Unauthorized user";
        } else if ($response == 422) {
            return "Data cannot be deleted";
        }
        return $response;
    }
}
