@extends('layouts.component.frontend.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Destinasi
                    <a href="{{route('destinasi.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Destinasi</label>
                        <b>{{$destinasi->nama_tempat}}</b>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Harga Tiket </label>
                            <b>{{$destinasi->harga}}</b>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Foto</label>
                            <img src="{{ asset('images/destinasi/' . $destinasi->foto) }}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="">Lokasi</label>
                            <b>{{$destinasi->nama_lokasi}}</b>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="">Deskripsi</label>
                        <b>{{$destinasi->deskripsi}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
