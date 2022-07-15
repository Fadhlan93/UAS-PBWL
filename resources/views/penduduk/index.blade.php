@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Penduduk
          <a href="{{ url('penduduk/create') }}" class="btn btn-primary btn-sm float-end">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>NIK</th> 
              <th>NAMA LENGKAP</th> 
              <th>JENIS KELAMIN</th> 
              <th>AGAMA</th> 
              <th>PENDIDIKAN</th> 
              <th>PEKERJAAN</th> 
              <th>PENGHASILAN</th> 
              <th>EDIT</th>
              <th>DELETE</th> 
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->NIK }}</td> 
                  <td>{{ $row->Nama }}</td> 
                  <td>{{ $row->Jenis_Kelamin }}</td> 
                  <td>{{ $row->Agama }}</td> 
                  <td>{{ $row->Pendidikan }}</td> 
                  <td>{{ $row->Pekerjaan }}</td> 
                  <td>{{ $row->Penghasilan }}</td> 
                  <td><a href="{{ url('penduduk/' . $row->NIK . '/edit') }}" class="btn btn-warning btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('penduduk/' . $row->NIK) }}"
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