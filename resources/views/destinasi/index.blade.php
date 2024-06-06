@extends('layouts.component.frontend.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          <h4 class="card-title"> Destinasi</h4>
          <a href="{{route('destinasi.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Tempat </th>
                    <th>Harga Tiket</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach ($destinasi as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->nama_tempat}}</td>
                            <td>{{$item->harga}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td><img src="{{asset('images/destinasi/'.$item->foto)}}" alt="" style="width: 100px"></td>
                            <td>
                                <form action="{{route('destinasi.destroy', $item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('destinasi.edit', $item->id)}}"
                                        class="btn btn-sm btn-success">Edit
                                    </a>
                                    <a href="{{route('destinasi.show', $item->id)}}"
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
