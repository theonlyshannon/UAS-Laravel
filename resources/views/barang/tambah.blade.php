@extends('layouts.admin')

@section('judul', 'Tambah Barang')

@section('content')
<form action="/barang" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="p-3">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Kategori</label>
                    <select id="inputKategori" required class="form-control" name="kategori">
                        <option selected>Pilih Kategori</option>
                        @foreach($kategori as $kategori)
                        <option value='{{ $kategori->id }}'>{{ $kategori->nama_kategori}} </option>
                        @endforeach

                    </select>
                </div>
            </div>  

            <div class="col">
                <div class="form-group">
                    <label>Nomor Kendaraan</label>
                    <input type="number" name="harga" id="" class="form-control" placeholder="">
                    @error('harga')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>Merk Kendaraan</label>
                    <input type="text" name="nama" id="" class="form-control" placeholder="">
                    @error('nama')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name='deskripsi' placeholder=""></textarea>
                    @error('deskripsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col">
                <div class="form-group">
                    <label>Stock Barang</label>
                    <input type="number" name="stock" id="" class="form-control" placeholder="">
                    @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label>Barang</label>
                    <input type="file" name="filename" required class="form-control">
                </div>
            </div>
        </div>
    </div>


    <div class="p-3">
        <a href="/barang" class="btn btn-success">Kembali</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
