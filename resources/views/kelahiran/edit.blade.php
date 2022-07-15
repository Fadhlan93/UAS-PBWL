@extends('layouts.app')

@section('content')
   
<div class="container">

     <h3>Edit Data Kelahiran</h3>
     <form action="{{ url('/kelahiran/' . $row->No_Akta_Kelaahiran)}}" method="POST">
     @method('PATCH')
     @csrf
       <div class="mb-3">
          <label>No Akte Kelahiran</label>
          <input type="text" class="form-control"
name="No_Akta_Kelahiran" value="{{ $row->No_Akta_Kelahiran }}"></>
       </div>
       <div class="mb-3">
          <label>Tempat Lahir</label>
          <input type="text" class="form-control"
name="Tempat" value="{{ $row->Tempat }}"></>
       </div>
       <div class="mb-3">
          <label>Hari</label>
          <input type="text" class="form-control"
name="Hari"value="{{ $row->Hari }}"></>
       </div>
       <div class="mb-3">
          <label>Tanggal Lahir</label>
          <input type="date" class="form-control"
name="Tanggal"value="{{ $row->Tanggal }}"></>
       </div>
       <div class="mb-3">
          <label>Keterangan</label>
          <input type="text" class="form-control"
name="Keterangan"value="{{ $row->Keterangan }}"></>
       </div>
       <div class="mb-3">
          <input type="submit" value="UPDATE">
       </div>
    </form>
  </div>

@endsection