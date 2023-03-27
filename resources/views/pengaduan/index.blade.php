@extends('layouts.app')

@section ('content')
<div class="card">
    <div class="card-header">{{__('Pengaduan')}}</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif
        <a href="{{route('pengaduan.create')}}" class="btn btn-md btn-success mx-1 shadow"> <i class="fa fa-lg fa-fw fa-plus"></i> Tambah pengaduan</a>
        <br/><br/>
        <div class="table-responsive">
            <table id="table_pengaduan" class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr style="background-color: darkgrey">
                       <th>No</th>
                       <th>tanggal pengaduan</th>
                       <th>Isi Laporan</th>
                       <th>Foto</th>
                       <th>Level</th>
                       <th class="text-center" width="70">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pengaduan as $pengaduan)
                    <tr>
                    <td>{{$loop->iteration}}</td>
                       <td>{{$pengaduan->tgl_pengaduan}}</td>
                       <td>{{$pengaduan->isi_laporan}}</td>
                       <td>{{$pengaduan->foto}}</td>
                       <td>{{$pengaduan->level}}</td>

                        <td>
                        <a href="{{route('pengaduan.edit', $pengaduan->id)}}" class="btn btn-sm btn-primary" title="edit">EDIT</a>
                           <form action="{{ route('pengaduan.delete', $pengaduan->id) }}" 
                            method="post" class="d-inline">
                             @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                         </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>