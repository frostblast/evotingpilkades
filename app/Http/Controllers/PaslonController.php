<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Validator;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paslons = Paslon::orderBy('no_urut', 'ASC')->get();
        return view('admin.paslon.paslons', compact(['paslons']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paslon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          
        $validatedData = $request->validate([
            'no_urut' => 'required|unique:paslons',
            'nama' => 'required|max:255',
            'foto' => 'required|image|file|max:2048|mimes:jpg,jpeg,png,svg',
            'deskripsi' => 'required'
        ]);

        // $validatedData(['user_id']) == auth()->user()->id;

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-calons');
            $file_name = $request->foto->getClientOriginalName();
        }

        Paslon::create($validatedData);
        return redirect()->route('kandidat.index')->with('success', 'berhasil');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paslon $kandidat)
    {
        return view('admin.paslon.show', compact(['kandidat']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paslon = Paslon::find($id); 
        return view('admin.paslon.edit', compact(['paslon']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paslon $paslon)
    {
        $rules = [
            'no_urut' => 'required|unique:paslons',
            'nama' => 'required|max:255',
            'foto' => 'required|image|file|max:1024|mimes:jpg,jpeg,png,svg,gif',
            'deskripsi' => 'required'
        ];

        if($request->no_urut != $paslon->no_urut){
            $rules['no_urut'] = 'required|unique:paslons';
        }

        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-calons');
            $file_name = $request->foto->getClientOriginalName();
        }

        $validatedData = $request->validate($rules);

        Paslon::where('id', $paslon->id)
              ->update($validatedData);
        return redirect()->route('kandidat.index')->with('Success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paslon = Paslon::find($id);
        $paslon->delete();
        return redirect()->route('kandidat.index');
    }
}
