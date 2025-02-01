@extends('layouts.main')

@section('content')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Edit Perusahaan</h3>
    </div>

    <form action="/perusahaan/update{{$datarecord->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">

                <label for="nama" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" name="nama_perusahaan" value="{{ old('nama_perusahaan',$datarecord->nama_perusahaan) }}">
                @error('nama_perusahaan') <div class="invalid-feedback">{{ $message }}</div>@enderror

                <label for="nama" class="form-label">NPWP</label>
                <input type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" value="{{ old('npwp',$datarecord->npwp) }}">
                @error('npwp') <div class="invalid-feedback">{{ $message }}</div>@enderror


                <label for="nama" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat',$datarecord->alamat) }}">
                @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror


                <label for="nama" class="form-label">No Telp</label>
                <input type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp',$datarecord->notelp) }}">
                @error('notelp') <div class="invalid-feedback">{{ $message }}</div>@enderror


                <label for="nama" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$datarecord->email) }}">
                @error('notelp') <div class="invalid-feedback">{{ $message }}</div>@enderror


                <label for="nama" class="form-label">Nama Bank</label>
                <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" value="{{ old('nama_bank', $datarecord->nama_bank) }}">
                @error('nama_bank') <div class="invalid-feedback">{{ $message }}</div>@enderror

                <label for="nama" class="form-label">No Rekening</label>
                <input type="text" class="form-control @error('no_rek') is-invalid @enderror" name="no_rek" value="{{ old('no_rek',$datarecord->no_rek) }}">
                @error('no_rek') <div class="invalid-feedback">{{ $message }}</div>@enderror


                <label for="nama" class="form-label">Nama Direktur</label>
                <input type="text" class="form-control @error('direktur') is-invalid @enderror" name="direktur" value="{{ old('direktur',$datarecord->direktur) }}">
                @error('direktur') <div class="invalid-feedback">{{ $message }}</div>@enderror


            </div>
            <a href="/perusahaan" class="btn btn-sm btn-default">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary""> Simpan</button>
       
        </div> <!-- /.card-body -->
    
        <div class=" card-body">
    </form>
</div>



@endsection