<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wilayah;  

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Wilayah::all();
        return view('wilayah.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wilayah.add'); 
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
               'Kode_Pos' => 'bail|required|unique:tb_pelanggan', 
               'Desa_Kelurahan' => 'required',
               'Kecamatan' => 'required',
               'Kabupaten_Kota' => 'required',
               'Provinsi' => 'required',
            ], 
            [ 
               'Kode_Pos.required' => 'Kode Pos wajib diisi', 
               'Kode_Pos.unique' => 'Kode Pos sudah ada', 
               'Desa_Kelurahan.required' => 'Desa/Kelurahan wajib diisi', 
               'Kecamatan.required' => 'Kecamatan wajib diisi',  
               'Kabupaten_Kota.required' => 'Kabupaten/Kota wajib diisi',
               'Provinsi.required' => 'Provinsi wajib diisi', 
            ]
        ); 
             
        Wilayah::create([ 
                 'Kode_Pos' => $request->Kode_Pos, 
                 'Desa_Kelurahan' => $request->Desa_Kelurahan,
                 'Kecamatan' => $request->Kecamatan, 
                 'Kabupaten_Kota' => $request->Kabupaten_kota,
                 'Provinsi' => $request->Provinsi,
            ]); 

            return redirect('wilayah');
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
        $row = Wilayah::findOrFail($id);
        return view('wilayah.edit', compact('row'));
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
                'Kode_Pos' => 'bail|required',
                'Desa_Kelurahan' => 'required',
                'Kecamatan' => 'required',
                'Kabupaten_Kota' => 'required',
                'Provinsi' => 'required'
             ],
             [
                'Kode_Pos.required' => 'Kode Pos wajib diisi',
                'Desa_Kelurahan.required' => 'Desa/Kelurahan wajib diisi',
                'Kecamatan.required' => 'Kecamatan wajib diisi',
                'Kabupaten_Kota.required' => 'Kabupaten/Kota wajib diisi',
                'Provinsi.required' => 'Provinsi wajib diisi'
             ]
             );
            
                $row = Wilayah::findOrFail($id);
                $row->update([
                'Kode_Pos' => $request->Kode_Pos,
                'Desa_Kelurahan' => $request->Desa_Kelurahan,
                'Kecamatan' => $request->Kecamatan,
                'Kabupaten_Kota' => $request->Kabupaten_kota,
                'Provinsi' => $request->Provinsi
             ]);
                
             return redirect('wilayah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Wilayah::findOrFail($id); 
        $row->delete();

        return redirect('wilayah');
    }
}
