@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Kelahiran
          <a href="{{ url('kelahiran/create') }}" class="btn btn-primary btn-sm float-end">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>NO AKTA KELAHIRAN</th> 
              <th>TEMPAT LAHIR</th> 
              <th>HARI</th> 
              <th>TANGGAL LAHIR</th>
              <th>KETERANGAN</th>
              <th>EDIT</th>
              <th>DELETE</th>  
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->No_Akta_Kelahiran }}</td> 
                  <td>{{ $row->Tempat }}</td> 
                  <td>{{ $row->Hari }}</td>
                  <td>{{ $row->Tanggal }}</td> 
                  <td>{{ $row->Keterangan }}</td>
                  <td><a href="{{ url('kelahiran/' . $row->No_Akta_Kelahiran . '/edit') }}" class="btn btn-warning btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('kelahiran/' . $row->No_Akta_Kelahiran) }}"
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