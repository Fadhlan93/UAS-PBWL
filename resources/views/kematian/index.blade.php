@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Kematian
          <a href="{{ url('kematian/create') }}" class="btn btn-primary btn-sm float-end">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>NO AKTA KEMATIAN</th> 
              <th>TEMPAT</th> 
              <th>HARI</th> 
              <th>TANGGAL KEMATIAN</th>
              <th>SEBAB</th>
              <th>EDIT</th>
              <th>DELETE</th>  
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->No_Akta_Kematian }}</td> 
                  <td>{{ $row->Tempat }}</td> 
                  <td>{{ $row->Hari }}</td>
                  <td>{{ $row->Tanggal }}</td> 
                  <td>{{ $row->Sebab }}</td>
                  <td><a href="{{ url('kematian/' . $row->No_Akta_Kematian . '/edit') }}" class="btn btn-warning btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('kematian/' . $row->No_Akta_Kematian) }}"
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