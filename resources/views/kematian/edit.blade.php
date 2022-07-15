@extends('layouts.app')

@section('content')
   
<div class="container">

     <h3>Edit Data Kematian</h3>
     <form action="{{ url('/kematian/' . $row->gol_id)}}" method="POST">
     @method('PATCH')
     @csrf
       <div class="mb-3">
          <label>No Akta Kematian</label>
          <input type="text" class="form-control"
name="No_Akta_Kematian" value="{{ $row->No_Akta_Kematian }}"></>
       </div>
       <div class="mb-3">
          <label>Tempat</label>
          <input type="text" class="form-control"
name="Tempat" value="{{ $row->Tempat }}"></>
       </div>
       <div class="mb-3">
          <label>Hari</label>
          <input type="text" class="form-control"
name="Hari"value="{{ $row->Hari }}"></>
       </div>
       <div class="mb-3">
          <label>Tanggal Kematian</label>
          <input type="date" class="form-control"
name="Tanggal"value="{{ $row->Tanggal }}"></>
       </div>
       <div class="mb-3">
          <label>Sebab</label>
          <input type="text" class="form-control"
name="Sebab"value="{{ $row->Sebab }}"></>
       </div>
          <input type="submit" value="UPDATE">
       </div>
    </form>
  </div>

@endsection