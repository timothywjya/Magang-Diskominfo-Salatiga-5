@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<h1 class="m-0 text-dark">List Ruangan</h1>
@stop

@section('content')
<div class="row">
<a href="/tambahdinas" class="btn mr-2">Tambah Data Dinas</a>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
                </head>

                <body>
                    <div class="row">
                        @foreach($data as $d)
                        <div class="col-3">
                            <div class="produk">
                                <p>{{ $d->nama_dinas }}</p>
                                {{ $d->Ruangan->count()}}
                                    <a href="/ruangan/{{$d['id'] }}" class="btn mr-2">Lihat List Ruangan</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </body>

                </html>
            </div>
        </div>
    </div>
</div>
@stop