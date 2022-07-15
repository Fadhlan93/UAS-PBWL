@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Wilayah
          <a href="{{ url('wilayah/create') }}" class="btn btn-primary btn-sm float-end">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>KODE POS</th> 
              <th>DESA / KELURAHAN</th> 
              <th>KECAMATAN</th> 
              <th>KABUPATEN / KOTA</th>
              <th>PROVINSI</th>
              <th>EDIT</th>
              <th>DELETE</th>  
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->Kode_Pos }}</td> 
                  <td>{{ $row->Desa_Kelurahan }}</td> 
                  <td>{{ $row->Kecamatan }}</td>
                  <td>{{ $row->Kabupaten_Kota }}</td> 
                  <td>{{ $row->Provinsi }}</td>
                  <td><a href="{{ url('wilayah/' . $row->Kode_Pos . '/edit') }}" class="btn btn-warning btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('wilayah/' . $row->Kode_Pos) }}"
                     method="POST">
                     @method('DELETE')
                     @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td> 
               </tr> 
           @endforeach 
       </table> 
   </div>

@endsection