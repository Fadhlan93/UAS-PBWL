<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kematian;  

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Kematian::all();
        return view('kematian.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kematian.add'); 
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
               'No_Akta_Kematian' => 'bail|required|unique:tb_kematian', 
               'Tempat' => 'required',
               'Hari' => 'required',
               'Tanggal' => 'required',
               'Sebab' => 'required'
            ], 
            [ 
               'No_Akta_Kematian.required' => 'No Akta Kematian wajib diisi', 
               'No_Akta_Kematian.unique' => 'No Akta Kematian sudah ada', 
               'Tempat.required' => 'Tempat wajib diisi',
               'Hari.required' => 'Hari wajib diisi', 
               'Tanggal.required' => 'Tanggal wajib diisi', 
               'Sebab.required' => 'Sebab wajib diisi',
            ]
        ); 
             
        Kematian::create([ 
                 'No_Akta_Kematian' => $request->No_Akta_Kematian, 
                 'Tempat' => $request->Tempat,
                 'Hari' => $request->Hari, 
                 'Tanggal' => $request->Tanggal,
                 'Sebab' => $request->Sebab,
            ]); 

            return redirect('sebab');
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
        $row = Sebab::findOrFail($id);
        return view('sebab.edit', compact('row'));
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
                'No_Akta_Kematian' => 'bail|required',
                'Tempat' => 'required',
                'Hari' => 'required',
                'Tanggal' => 'required',
                'Sebab' => 'required'
             ],
             [
                'No_Akta_Kematian.required' => 'No Akta Kematian wajib diisi',
                'Tempat.required' => 'Tempat wajib diisi',
                'Hari.required' => 'Hari wajib diisi',
                'Tanggal.required' => 'Tanggal wajib diisi',
                'Sebab.required' => 'Sebab wajib diisi'
             ]
             );
            
                $row = Sebab::findOrFail($id);
                $row->update([
                    'No_Akta_Kematian' => $request->No_Akta_Kematian, 
                    'Tempat' => $request->Tempat,
                    'Hari' => $request->Hari, 
                    'Tanggal' => $request->Tanggal,
                    'Sebab' => $request->Sebab
             ]);
                
             return redirect('kematian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Kematian::findOrFail($id); 
        $row->delete();

        return redirect('kematian');
    }
}
