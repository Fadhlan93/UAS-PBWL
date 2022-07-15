@extends('layouts.app')

@section('content')
  <div class="container">
 
    <h3>Tambah Data Keluarga</h3>
       <form action="{{ url('/keluarga') }}" method="POST">
       @csrf 
       <div class="mb-3">
          <label>No Kartu Keluarga</label>
          <input type="text" class="form-control"
name="No_Kartu_Keluarga">
       </div>
       <div class="mb-3">
          <label>NIK</label>
          <input type="text" class="form-control"
name="NIK">
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
name="Alamat">
       </div>
       <div class="mb-3">
         <label>RT</label>
         <input type="text" class="form-control"
name="RT">
       </div>
       <div class="mb-3">
         <label>RW</label>
         <input type="text" class="form-control"
name="RW">
       </div>
       <div class="mb-3">
         <input type="submit" value="SIMPAN">
       </div>
     </form>
  </div>

  @endsection
