@extends('layouts.component.frontend.admin')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card-header">Data Lokasi
                <a href="{{route('lokasi.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table" id="datatables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lokasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @php $no = 1; @endphp
                        <tbody>
                            @foreach ($lokasi as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_lokasi}}</td>
                                <td>
                                    <form action="{{route('lokasi.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('lokasi.edit', $item->id)}}"
                                            class="btn btn-sm btn-success">Edit
                                        </a>
                                        <a href="{{route('lokasi.show', $item->id)}}"
                                            class="btn btn-sm btn-warning">Lihat
                                        </a>
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title"> Lokasi</h4>
                <a href="{{route('lokasi.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Lokasi </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($lokasi as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_lokasi}}</td>
                                <td>
                                    <form action="{{route('lokasi.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('lokasi.edit', $item->id)}}"
                                            class="btn btn-sm btn-success">Edit
                                        </a>
                                        <a href="{{route('lokasi.show', $item->id)}}"
                                            class="btn btn-sm btn-warning">Lihat
                                        </a>
                                        <button class="btn btn-sm btn-danger" type="submit"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
