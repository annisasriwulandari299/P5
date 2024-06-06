@extends('layouts.component.frontend.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h4 class="card-title"> Kategori</h4>
                <a href="{{route('kategori.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table tablesorter " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori </th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($kategori as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->nama_kategori}}</td>
                                <td>
                                    <form action="{{route('kategori.destroy', $item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('kategori.edit', $item->id)}}"
                                            class="btn btn-sm btn-success">Edit
                                        </a>
                                        <a href="{{route('kategori.show', $item->id)}}"
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
