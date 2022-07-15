@extends('layouts.app')

@section('content')
  <div class="container">
 
    <h3>Tambah Data Wilayah</h3>
       <form action="{{ url('/wilayah') }}" method="POST">
       @csrf 
       <div class="mb-3">
          <label>Kode Pos</label>
          <input type="text" class="form-control"
name="Kode_Pos">
       </div>
       <div class="mb-3">
          <label>Desa / Kelurahan</label>
          <input type="text" class="form-control"
name="Desa_kelurahan">
       </div>
       <div class="mb-3">
         <label>Kecamatan</label>
         <input type="text" class="form-control"
name="Kecamatan">
       </div>
       <div class="mb-3">
         <label>Kabupaten / Kota</label>
         <input type="text" class="form-control"
name="Kabupaten_Kota">
       </div>
       <div class="mb-3">
         <label>Provinsi</label>
         <input type="text" class="form-control"
name="Provinsi">
       </div>
       <div class="mb-3">
         <input type="submit" value="SIMPAN">
       </div>
     </form>
  </div>

  @endsection
