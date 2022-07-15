@extends('layouts.app')

@section('content')
   
<div class="container">

     <h3>Edit Data Penduduk</h3>
     <form action="{{ url('/penduduk/' . $row->KTP)}}" method="POST">
     @method('PATCH')
     @csrf
       <div class="mb-3">
          <label>NIK</label>
          <input type="text" class="form-control"
name="NIK" value="{{ $row->NIK }}"></>
       </div>
       <div class="mb-3">
          <label>Nama Lengkap</label>
          <input type="text" class="form-control"
name="Nama" value="{{ $row->Nama }}"></>
       </div>
       <div class="mb-3">
          <label>Jenis Kelamin</label>
          <select class="form-select" aria-label="Default select example" name="JK">
               <option selected>-Pilih Jenis Kelamin-</option>
               <option>Laki-Laki</option>
               <option>Perempuan</option>
            </select>
       </div>
       <div class="mb-3">
          <label>Agama</label>
          <select class="form-select" aria-label="Default select example" name="Agama">
               <option selected>-Pilih Agama-</option>
               <option>Islam</option>
               <option>Kristen Protestan</option>
               <option>Kristen Katolik</option>
               <option>Hindu</option> 
               <option>Buddha</option>
               <option>Konghucu</option>
            </select>
       </div>
       <div class="mb-3">
          <label>Pendidikan</label>
          <select class="form-select" aria-label="Default select example" name="Agama">
               <option selected>-Pilih Pendidikan-</option>
               <option>SD/MIN</option>
               <option>SMP/MTs</option>
               <option>SMA/SMK/MAN</option>
               <option>Diploma</option> 
               <option>S-1</option>
               <option>S-2</option>
               <option>S-3</option>
            </select>
       </div>
       <div class="mb-3">
          <label>Pekerjaan</label>
          <select class="form-select" aria-label="Default select example" name="Agama">
               <option selected>-Pilih Pekerjaan-</option>
               <option>TNI/POLRI</option>
               <option>BUMN/BUMD</option>
               <option>ASN/PNS</option>
               <option>Wiraswasta/Wirausaha</option> 
               <option>Petani/Peternak/Nelayan</option>
               <option>Buruh</option>
               <option>Mahasiswa/Pelajar</option>
               <option>Ibu Rumah Tangga</option>
               <option>Lain-lainnya</option>
            </select>
       </div>
       <div class="mb-3">
          <label>Penghasilan</label>
          <select class="form-select" aria-label="Default select example" name="Agama">
               <option selected>-Pilih Penghasilan-</option>
               <option>-</option>
               <option>< Rp.500.000,-</option>
               <option>Rp.500.000-Rp.1.000.000,-</option>
               <option>Rp.1.000.000-Rp.2.000.000,-</option>
               <option>Rp.2.000.000-Rp.4.000.000,-</option> 
               <option>Rp.4.000.000-Rp.6.000.000,-</option>
               <option>Rp.6.000.000-Rp.8.000.000,-</option>
               <option>Rp.8.000.000-Rp.10.000.000,-</option>
               <option>> Rp.10.000.000,-</option>
            </select>
       </div>
       <div class="mb-3">
          <input type="submit" value="UPDATE">
       </div>
    </form>
  </div>

@endsection