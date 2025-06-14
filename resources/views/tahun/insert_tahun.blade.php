@extends('layouts.main')

@section('content')

<div class="card card-info">
    <div class="card-header">
        <h2>{{ $datarecord->tahun ? 'Edit Post' : 'Tambah Post' }}</h2>
    </div>



    <form action="/tahun/store" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama" class="form-label">Tahun</label>

                <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun',$datarecord->tahun) }}">
                @error('nama_perusahaan') <div class="invalid-feedback">{{ $message }}</div>@enderror


            </div>
            <a href="/tahun" class="btn btn-sm btn-default">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary""> Simpan</button>
       
        </div> <!-- /.card-body -->
    
        <div class=" card-body">
    </form>
</div>



@endsection