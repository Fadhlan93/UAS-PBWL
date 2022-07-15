@extends('layouts.app')

@section('content')
   
<div class="container">

     <h3>Edit Data Keluarga</h3>
     <form action="{{ url('/keluarga/' . $row->gol_id)}}" method="POST">
     @method('PATCH')
     @csrf
       <div class="mb-3">
          <label>No kartu Keluarga</label>
          <input type="text" class="form-control"
name="No_Kartu_Keluarga" value="{{ $row->No_Kartu_Keluarga }}"></>
       </div>
       <div class="mb-3">
          <label>NIK</label>
          <input type="text" class="form-control"
name="NIK" value="{{ $row->NIK }}"></>
       </div>
       <div class="mb-3">
          <label>Status Perkawinan</label>
          <select class="form-select" aria-label="Default select example" name="JK">
               <option selected>-Pilih Status Perkawinan-</option>
               <option>Kawin</option>
               <option>Belum Kawin</option>
            </select>
       </div>
       <div class="mb-3">
          <label>Alamat</label>
          <input type="text" class="form-control"
name="Alamat"value="{{ $row->Alamat }}"></>
       </div>
       <div class="mb-3">
          <label>RT</label>
          <input type="text" class="form-control"
name="RT"value="{{ $row->RT }}"></>
       </div>
       <div class="mb-3">
          <label>RW</label>
          <input type="text" class="form-control"
name="RW"value="{{ $row->RW }}"></>
       </div>
          <input type="submit" value="UPDATE">
       </div>
    </form>
  </div>

@endsection