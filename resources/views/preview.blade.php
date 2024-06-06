@extends('layouts.component.frontend.preview')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Destinasi
                    <a href="{{url('/')}}" class="btn btn-primary" style="float: right">Kembali</a>
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
{{-- <div class="row">
    <div class="span12">
        <div class="blog-post">

            <div class="blog-post-thumb">

                <img src="{{ asset('images/destinasi/'. $destinasi->foto) }}" style="height: 200px" alt="">

            </div><!-- end .blog-post-thumb -->

            <div class="blog-post-title">

                <i class="ifc-ball_point_pen"></i>

                <h4>
                    {{ $destinasi->nama_tempat }}
                </h4>

                <p>{{ $destinasi->kategori->nama_kategori }}</p>

            </div><!-- end .blog-post-title -->

            <p>{{ $destinasi->deskripsi }}</p>


        </div><!-- end .blog-post -->

    </div><!-- end .span4 -->
</div><!-- end .row --> --}}
@endsection
