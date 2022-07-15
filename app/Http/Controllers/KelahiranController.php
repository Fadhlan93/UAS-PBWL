<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelahiran;  

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kelahiran::all();
        return view('kelahiran.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelahiran.add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 
               'No_Akta_Kelahiran' => 'bail|required|unique:tb_kelahiran', 
               'Tempat' => 'required',
               'Hari' => 'required',
               'Tanggal' => 'required',
               'Keterangan' => 'required'
            ], 
            [ 
               'No_Akta_Kelahiran.required' => 'No Akta Kelahiran wajib diisi', 
               'No_Akta_Kelahiran.unique' => 'No Akta Kelahiran sudah ada', 
               'Tempat.required' => 'Tempat wajib diisi',
               'Hari.required' => 'Hari wajib diisi', 
               'Tanggal.required' => 'Tanggal wajib diisi', 
               'Keterangan.required' => 'Keterangan wajib diisi',
            ]
        ); 
             
        Kelahiran::create([ 
                 'No_Akta_Kelahiran' => $request->No_Akta_Kelahiran, 
                 'Tempat' => $request->Tempat,
                 'Hari' => $request->Hari, 
                 'Tanggal' => $request->Tanggal,
                 'Keterangan' => $request->Keterangan,
            ]); 

            return redirect('kelahiran');
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
        $row = Kelahiran::findOrFail($id);
        return view('kelahiran.edit', compact('row'));
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
        $request->validate(
             [
                'No_Akta_Kelahiran' => 'bail|required',
                'Tempat' => 'required',
                'Hari' => 'required',
                'Tanggal' => 'required',
                'Keterangan' => 'required'
             ],
             [
                'No_Akta_Kelahiran.required' => 'No Akta Kelahiran wajib diisi',
                'Tempat.required' => 'Tempat wajib diisi',
                'Hari.required' => 'Hari wajib diisi',
                'Tanggal.required' => 'Tanggal wajib diisi',
                'Keterangan.required' => 'Keterangan wajib diisi'
             ]
             );
            
                $row = Kelahiran::findOrFail($id);
                $row->update([
                    'No_Akta_Kelahiran' => $request->No_Akta_Kelahiran, 
                    'Tempat' => $request->Tempat,
                    'Hari' => $request->Hari, 
                    'Tanggal' => $request->Tanggal,
                    'Keterangan' => $request->Keterangan
             ]);
                
             return redirect('kelahiran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Kelahiran::findOrFail($id); 
        $row->delete();

        return redirect('kelahiran');
    }
}
