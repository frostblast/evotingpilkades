<?php

namespace App\Http\Controllers;

use App\Models\Dpt;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class DptController extends Controller
{
    public $dpts, $dpt_id, $nama;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dpt.dpts', [
            'dpts' => Dpt::latest()->filter(request(['search']))->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dpt.create');
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
            'nik' => 'required|string|unique:dpts',
            'nama' => 'required|string',
            'jk' => 'required|string',
            'alamat' => 'required|string',
            'tgllahir' => 'required|date',
            'status' => 'required'
        ]);


        // $validatedData['user_id'] = auth()->user->id;  
        Dpt::create($validatedData);
        return redirect ('dashboard/dpt')->with('success', 'Data Berhasil Ditambahkan');
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
        $dpt = Dpt::find($id); 
        return view('admin.dpt.edit', compact(['dpt']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dpt $dpt)
    {
        $rules = [
            'nama' => 'required|string',
            'jk' => 'required|string',
            'alamat' => 'required|string',
            'tgllahir' => 'required|date',
            'status' => 'required'
        ];

        if($request->nik != $dpt->nik){
            $rules['nik'] = 'required|string|unique:dpts';
        }
        
        $validatedData = $request->validate($rules);

        Dpt::where('id', $dpt->id)
            ->update($validatedData);
            
        return redirect()->route('dpt.index')->with('success','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dpt = Dpt::find($id);
        $dpt->delete();
        return redirect()->route('dpt.index')->with('success','Berhasil di Hapus');
    }
}
