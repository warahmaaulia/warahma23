@extends('layouts.app')
@section('title', 'Halaman Tambah User')
@section('content_header')
   <h1>Tambah Pengaduan</h1>
@stop
@section('link')
<li class="breadcrumb-item"><a href="{{route('pengaduan.index')}}">User</a></li>
<li class="breadcrumb-item active">Tambah</li>
@stop
@section('content')
<div class="card">
   <div class="card-body">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif
       <form method="POST" action="{{ route('pengaduan.store') }}" >
           @csrf
           <div class="row mb-3">
               <label for="tgl_pengaduan" class="col-md-4 col-form-label text-mdend">{{ __('Tanggal') }}</label>
                    <div class="col-md-6">
                        <input id="tgl_pengaduan" type="date" class="form-control
                        @error('tgl_pengaduan') is-invalid @enderror" name="tgl_pengaduan" value="{{old('tgl_pengaduan') }}" required autocomplete="tgl_pengaduan" autofocus>
                        @error('tgl_pengaduan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                   </div>
                </div>
            <div class="row mb-3">
               <label for="isi_laporan" class="col-md-4 col-form-label text-md-end"> {{ __('Isi Laporan') }}</label>
                    <div class="col-md-6">
                       <input id="isi_laporan" type="text" class="form-control
                        @error('isi_laporan') is-invalid @enderror" name="isi_laporan" value="{{ old('isi_laporan') }}" required autocomplete="isi_laporan" autofocus>
                        @error('isi_laporan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                   </div>
                </div>
            <div class="row mb-3">
               <label for="foto" class="col-md-4 col-form-label text-mdend">{{ __('Foto') }}</label>
                   <div class="col-md-6">
                        <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto">
                           @error('foto')
                               <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                           @enderror
                    </div>
                </div>
           <div class="row mb-0">
               <div class="col-md-6 offset-md-4">
                   <button type="submit" class="btn btn-primary">
                    Simpan
                   </button>
           </div>
       </div>
   </form>
   </div>
</div>
@endsection