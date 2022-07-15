@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Selamat Datang Di Aplikasi Data Kependudukan Desa Medan Estate') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-3 mb-2 bg-transparent text-dark"></div>
<div class="card border-success mb-3" style="max-end: 18rem;">
  <div class="card-header bg-transparent border-success">DESA MEDAN ESTATE</div>
  <div class="card-body text-success">
    <h5 class="card-title">KEPENDUDUKAN</h5>
    <p class="card-text">Penduduk Desa Medan Estate berjumlah : ±15. 559 jiwa yang terdiri dari laki-laki  : ± 7.495 jiwa dan perempuan : ± 8.804 jiwa dengan jumlah Kepala Keluarga : ± 3.182 KK</p>
  </div>
  <div class="card-footer bg-transparent border-success">@Copyright 2022</div>
</div>
@endsection
