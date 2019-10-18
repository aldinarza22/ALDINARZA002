@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah kategori Artikel</div>   
                             
                <div class="card-body">
                {!! Form::model($KategoriArtikel, ['route' => ['kategori_artikel.update', $KategoriArtikel->id], 'method'=>'patch']) !!}
                     @include('kategori_artikel.form')
                {!! form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
