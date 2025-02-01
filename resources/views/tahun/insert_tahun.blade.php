@extends('layouts.main')

@section('content')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Tambah Tahun</h3>
    </div>



    <form action="/tahun/store" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama" class="form-label">Tahun</label>
                <input type="number" class="form-control" id="tahun" name="tahun">

            </div>
            <a href="/tahun" class="btn btn-sm btn-default">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary""> Simpan</button>
       
        </div> <!-- /.card-body -->
    
        <div class=" card-body">
    </form>
</div>



@endsection