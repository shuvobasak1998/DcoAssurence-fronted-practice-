<?php

namespace App\Http\Controllers\Fronted;

use App\Models\State;
use App\Models\Country;
use App\Models\EntityType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landing_page()
    {
        $countries=Country::all();
        return view('Fronted.Layout.Master',compact('countries'));
    }
    

    public function justselect()
    {
        $countries=Country::all();
        return view('Fronted.Layout.just_select',compact('countries'));
    }


    public function bycountry($id)
    {
        $entity_types = EntityType::where('country_id',$id)->get();
        return view('Droupdown',compact('entity_types'));

    }

    public function byentity($id)
    {
        $states = State::where('entity_id',$id)->get();
        return view('Statedroupdown',compact('states'));

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
    }
}
