@extends('layouts.admin')

@section('judul')
Data Kendaraan
@endsection

@section('tabel')
<div class="p-3">
    <a href="/barang/create" class="btn btn-primary my-3">Tambah Kendaraan</a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Merk Mobil</th>
                <th scope="col">Nomor Kendaraan</th>
                <th scope="col">Ruang</th>
                <th scope="col">Gambar Kendaraan</th>
                <th scope="col">Kategori Kendaraan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($barang as $key => $value)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$value->nama_brg}}</td>
                <td>{{$value->harga_brg}}</td>
                <td>{{$value->deskripsi_brg}}</td>
                <td>
                    <img src="/uploads/{{$value->gambar_brg}}" width="100px" alt="">
                </td>
                <td>
                    {{$value->kategori->nama_kategori}}
                </td>
                <td class="mr-3">
                    <a href="/barang/{{$value->id}}" class="btn btn-info">Detail</a>
                    <a href="/barang/{{$value->id}}/edit" class="btn btn-success">Edit</a>
                    <form onclick="return confirm('Anda yakin ingin menghapus?')" action="/barang/{{$value->id}}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger my-1" data-confirm-delete="true">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8">No data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
