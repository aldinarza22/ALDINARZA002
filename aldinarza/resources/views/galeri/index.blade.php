@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Galeri</div>   
                             
                <div class="card-body">
                <a href="{!! route('galeri.create',) !!}"  
                                class="btn btn-info">tambah data</a>  
    
                <table border="1">
                    <tr>
                        <td>Id</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Users Id</td>
                        <td>Update</td>
                        <td>Aksi</td>
                    </tr>

                        @foreach ($listGaleri as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->update_id !!}</td>
                        <td>
                        <a href="{!! route('galeri.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-primary">Lihat</a> 
                        <a href="{!! route('galeri.edit' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-success">Ubah</a>

                    {!! Form::open(['route'=> ['galeri.destroy', $item->id], 'method'=>'delete']) !!}

                    {!! Form::submit('Hapus',['class'=>'btn btn-danger', 'onclick'=>"return confirm('apakah anda yakin menghapus data ini?')"]); !!} 

                    {!! Form::close() !!}                      
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
