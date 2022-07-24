<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Paslon;
use App\Models\Dpt;
use App\Models\Voting;

class VoteController extends Controller
{
    public function kandidat() {
        if (Auth::guard('dpt')->check()) {
            $paslon = Paslon::get();
            return view('voting.masuk', compact(['paslon']));
        }
    }
    
    public function voting() {
        // dd(Auth::user('guard:dpt')->id);
        $paslon = Paslon::get();
        return view('voting.pilihcalon', compact(['paslon']));
    }

    public function prosesvoting(Request $request) {
        $validatedData = $request->validate([
            'dpt_id' => 'required',
            'paslon_id' => 'required',
            'vot' => 'required'
        ]);
        Voting::create($validatedData);
        Dpt::whereId($request->dpt_id)->update(['status' => 1]);
            return redirect ('/')->with('Data Berhasil Ditambahkan');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('voting.votes');
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
        return view('voting.show', compact(['tampil']));
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
