<?php

namespace App\Http\Controllers;

use App\Models\Msgcontact;
use Illuminate\Http\Request;

class MsgcontactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgcontacts = Msgcontact::all();
        return view('msgcontacts.index', compact ('msgcontacts'));
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
     * @param  \App\Models\Msgcontact  $msgcontact
     * @return \Illuminate\Http\Response
     */
    public function show(Msgcontact $msgcontact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Msgcontact  $msgcontact
     * @return \Illuminate\Http\Response
     */
    public function edit(Msgcontact $msgcontact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Msgcontact  $msgcontact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msgcontact $msgcontact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Msgcontact  $msgcontact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msgcontact $msgcontact)
    {
        $msgcontact->delete();
        return response()->json();
    }
}
