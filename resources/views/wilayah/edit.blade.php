@extends('layouts.app')

@section('content')
   
<div class="container">

     <h3>Edit Data Wilayah</h3>
     <form action="{{ url('/wilayah/' . $row->Kode_Pos)}}" method="POST">
     @method('PATCH')
     @csrf
       <div class="mb-3">
          <label>Kode Pos</label>
          <input type="text" class="form-control"
name="Kode_Pos" value="{{ $row->Kode_Pos }}"></>
       </div>
       <div class="mb-3">
          <label>Desa / Kelurahan</label>
          <input type="text" class="form-control"
name="Desa_Kelurahan" value="{{ $row->Desa_Kelurahan }}"></>
       </div>
       <div class="mb-3">
          <label>Kecamatan</label>
          <input type="text" class="form-control"
name="Kecamatan"value="{{ $row->Kecamatan }}"></>
       </div>
       <div class="mb-3">
          <label>Kabupaten / Kota</label>
          <input type="text" class="form-control"
name="Kabupaten_Kota"value="{{ $row->Kabupaten_Kota }}"></>
       </div>
       <div class="mb-3">
          <label>Provinsi</label>
          <input type="text" class="form-control"
name="Provinsi"value="{{ $row->Provinsi }}"></>
       </div>
       <div class="mb-3">
          <input type="submit" value="UPDATE">
       </div>
    </form>
  </div>

@endsection