@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Keluarga
          <a href="{{ url('keluarga/create') }}" class="btn btn-primary btn-sm float-end">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>NO KARTU KELUARGA</th> 
              <th>NIK</th> 
              <th>STATUS PERKAWINAN</th> 
              <th>ALAMAT</th>
              <th>RT</th>
              <th>RW</th>
              <th>EDIT</th>
              <th>DELETE</th>  
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->No_Kartu_Keluarga }}</td> 
                  <td>{{ $row->NIK }}</td> 
                  <td>{{ $row->Status }}</td>
                  <td>{{ $row->Alamat }}</td> 
                  <td>{{ $row->RT }}</td>
                  <td>{{ $row->RW }}</td>
                  <td><a href="{{ url('keluarga/' . $row->No_Kartu_Keluarga . '/edit') }}" class="btn btn-warning btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('keluarga/' . $row->No_Kartu_Keluarga) }}"
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