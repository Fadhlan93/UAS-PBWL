@extends('layouts.app')

@section('content')
  <div class="container">
 
    <h3>Tambah Data Kelahiran</h3>
       <form action="{{ url('/kelahiran') }}" method="POST">
       @csrf 
       <div class="mb-3">
          <label>No Akta Kelahiran</label>
          <input type="text" class="form-control"
name="No_Akta_Kelahiran">
       </div>
       <div class="mb-3">
          <label>Tempat Lahir</label>
          <input type="text" class="form-control"
name="Tempat">
       </div>
       <div class="mb-3">
         <label>Hari</label>
         <input type="text" class="form-control"
name="Hari">
       </div>
       <div class="mb-3">
         <label>Tanggal Lahir</label>
         <input type="date" class="form-control"
name="Tanggal">
       </div>
       <div class="mb-3">
         <label>Keterangan</label>
         <input type="text" class="form-control"
name="Keterangan">
       </div>
       <div class="mb-3">
         <input type="submit" value="SIMPAN">
       </div>
     </form>
  </div>

  @endsection
