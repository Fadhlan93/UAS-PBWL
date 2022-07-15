<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;  

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Penduduk::all();
        return view('penduduk.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.add'); 
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
               'NIK' => 'bail|required|unique:tb_penduduk', 
               'Nama' => 'required', 
               'Jenis_Kelamin' => 'required', 
               'Agama' => 'required', 
               'Pendidikn' => 'required',
               'Pekejaan' => 'required', 
               'Penghasilan' => 'required'  

            ], 
            [ 
               'NIK.required' => 'NIK wajib diisi', 
               'KTP.unique' => 'KTP sudah ada',  
               'Nama.required' => 'Nama wajib diisi', 
               'Jenis_Kelamin.required' => 'Jenis Kelamin wajib diisi', 
               'Agama.required' => 'Agama wajib diisi',
               'Pendidikan.required' => 'Pendidikan wajib diisi',
               'Pekerjaan.required' => 'Pekerjaan wajib diisi',
               'Penghasilan.required' => 'Penghasilan wajib diisi',
            ]
        ); 
             
        Penduduk::create([ 
                 'NIK' => $request->NIK, 
                 'Nama' => $request->Nama, 
                 'Jenis_Kelamin' => $request->Jenis_Kelamin, 
                 'Agama' => $request->Agama, 
                 'Pendidikan' => $request->Pendidikan, 
                 'Pekerjaan' => $request->Pekerjaan, 
                 'Penghasilan' => $request->Penghasilan, 
            ]); 

            return redirect('penduduk');
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
        $row = Penduduk::findOrFail($id);
        return view('penduduk.edit', compact('row'));
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
                'NIK' => 'bail|required',
                'Nama' => 'required',
                'Jenis_Kelamin' => 'required',
                'Agama' => 'required',
                'Pendidikan' => 'required',
                'Pekerjaan' => 'required',
                'Penghasilan' => 'required'
             ],
             [
                'NIK.required' => 'NIK wajib diisi',
                'Nama.required' => 'Nama wajib diisi',
                'Jenis_Kelamin.required' => 'Jenis_Kelamin wajib diisi',
                'Agama.required' => 'Agama wajib diisi',
                'Pendidikan.required' => 'Pendidikan wajib diisi',
                'Pekerjaan.required' => 'Pekerjaan wajib diisi',
                'Penghasilan.required' => 'Penghasilan wajib diisi'
             ]
             );
            
                $row = Penduduk::findOrFail($id);
                $row->update([
                    'NIK' => $request->NIK, 
                    'Nama' => $request->Nama, 
                    'Jenis_Kelamin' => $request->Jenis_Kelamin, 
                    'Agama' => $request->Agama, 
                    'Pendidikan' => $request->Pendidikan, 
                    'Pekerjaan' => $request->Pekerjaan, 
                    'Penghasilan' => $request->Penghasilan
             ]);
                
             return redirect('penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Penduduk::findOrFail($id); 
        $row->delete();

        return redirect('penduduk');
    }
}
