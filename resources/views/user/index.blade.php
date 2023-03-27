@extends('layouts.app')

@section ('content')
<div class="card">
    <div class="card-header">{{__('User')}}</div>
    <div class="card-body">
        @if (session('status'))
        <div class="alert-success" role="alert">
            {{session('status')}}
        </div>
        @endif
        <a href="{{route('user.create')}}" class="btn btn-md btn-success mx-1 shadow"> <i class="fa fa-lg fa-fw fa-plus"></i> Tambah User</a>
        <br/><br/>
        <div class="table-responsive">
            <table id="table_user" class="table table-striped table-hover table-condensed table-bordered">
                <thead>
                    <tr style="background-color: darkgrey">
                        <th>No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nik</th>
                        <th>Telpon</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th class="text-center" width="70">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->nik}}
                        <td>{{$user->telpon}}
                        <td>{{$user->password}}
                        <td>{{$user->level}}</td>

                        <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-sm btn-primary" title="edit">EDIT</a>
                           <form action="{{ route('user.delete', $user->id) }}" 
                            method="post" class="d-inline">
                             @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                         </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>