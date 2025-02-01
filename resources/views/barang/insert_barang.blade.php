@extends('layouts.main')

@section('content')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Tambah Barang</h3>
    </div>

    <form action="/barang/store" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama" class="form-label">Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang">

                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang">

                <label for="nama" class="form-label">spesifikasi</label>
                <input type="text" class="form-control" name="spesifikasi">

                <label for="nama" class="form-label">satuan</label>
                <input type="text" class="form-control" name="satuan">

                <label for="nama" class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga">

                <label for="nama" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok">
            </div>

            </table>
            <div>
                <a href="/barang" class="btn btn-sm btn-default">Batal</a>
                <button type="submit" class="btn btn-sm btn-primary"> Simpan</button>

            </div>



            <div class=" card-body">
                <!-- /.card-body -->
    </form>
</div>




@endsection