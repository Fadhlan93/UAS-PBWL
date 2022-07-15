@extends('layouts.app')

@section('content')
  <div class="container">
 
    <h3>Tambah Data Kematian</h3>
       <form action="{{ url('/kematian') }}" method="POST">
       @csrf 
       <div class="mb-3">
          <label>No Akta Kematian</label>
          <input type="text" class="form-control"
name="No_Akta_Kematian">
       </div>
       <div class="mb-3">
          <label>Tempat</label>
          <input type="text" class="form-control"
name="Tempat">
       </div>
       <div class="mb-3">
         <label>Hari</label>
         <input type="text" class="form-control"
name="Hari">
       </div>
       <div class="mb-3">
         <label>Tanggal Kematian</label>
         <input type="date" class="form-control"
name="Tanggal">
       </div>
       <div class="mb-3">
         <label>Sebab</label>
         <input type="text" class="form-control"
name="Sebab">
       </div>
       <div class="mb-3">
         <input type="submit" value="SIMPAN">
       </div>
     </form>
  </div>

  @endsection
