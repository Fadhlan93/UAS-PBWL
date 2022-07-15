<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;  

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Keluarga::all();
        return view('keluarga.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluarga.add'); 
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
               'No_Kartu_Keluarga' => 'bail|required|unique:tb_keluarga', 
               'NIK' => 'required',
               'Status' => 'required',
               'Alamat' => 'required',
               'RT' => 'required',
               'RW' => 'required'
            ], 
            [ 
               'No_Kartu_Keluarga.required' => 'No Kartu Keluarga wajib diisi', 
               'No_Kartu_Keluarga.unique' => 'No Kartu Keluarga sudah ada', 
               'NIK.required' => 'NIK wajib diisi', 
               'Status.required' => 'Status wajib diisi', 
               'Alamat.required' => 'Alamat wajib diisi',
               'RT.required' => 'RT wajib diisi', 
               'RW.required' => 'RW wajib diisi', 
            ]
        ); 
             
        Keluarga::create([ 
                 'No_Kartu_Keluarga' => $request->No_Kartu_Keluarga, 
                 'NIK' => $request->NIK,
                 'Status' => $request->Status, 
                 'Alamat' => $request->Alamat,
                 'RT' => $request->RT,
                 'RW' => $request->RW,
            ]); 

            return redirect('keluarga');
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
        $row = Keluarga::findOrFail($id);
        return view('keluarga.edit', compact('row'));
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
                'No_Kartu_Keluarga' => 'bail|required',
                'NIK' => 'required',
                'Status' => 'required',
                'Alamat' => 'required',
                'RT' => 'required',
                'RW' => 'required'
             ],
             [
                'No_Kartu_Keluarga.required' => 'No Kartu Keluarga wajib diisi',
                'NIK.required' => 'NIK wajib diisi',
                'Status.required' => 'Status wajib diisi',
                'Alamat.required' => 'Alamat wajib diisi',
                'RT.required' => 'RT wajib diisi',
                'RW.required' => 'RW wajib diisi'
             ]
             );
            
                $row = Keluarga::findOrFail($id);
                $row->update([
                'No_Kartu_Keluarga' => $request->No_Kartu_Keluarga,
                'NIK' => $request->NIK,
                'Status' => $request->Status,
                'Alamat' => $request->Alamat,
                'RT' => $request->RT,
                'RW' => $request->RW
             ]);
                
             return redirect('keluarga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Keluarga::findOrFail($id); 
        $row->delete();

        return redirect('keluarga');
    }
}
