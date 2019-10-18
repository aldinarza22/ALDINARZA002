@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah kategori Berita</div>   
                             
                <div class="card-body">
                {!! Form::model($KategoriBerita, ['route' => ['kategori_berita.update', $KategoriBerita->id], 'method'=>'patch']) !!}
                     @include('kategori_berita.form')
                {!! form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
