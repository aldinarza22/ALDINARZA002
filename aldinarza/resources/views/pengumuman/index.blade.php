@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Pengumuman</div>   
                             
                <div class="card-body">
                <a href="{!! route('pengumuman.create',) !!}"  
                                class="btn btn-sm btn-primary">tambah data</a>  
    
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Users Id</td>
                        <td>Aksi</td>
                    </tr>

                        @foreach ($listPengumuman as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>
                        <a href="{!! route('pengumuman.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-primary">Lihat</a>                   
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
