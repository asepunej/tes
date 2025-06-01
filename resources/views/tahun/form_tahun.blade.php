@extends('layouts.main')

@section('content')

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">{{ $datarecord->tahun ? 'Edit Post' : 'Tambah Tahun' }} </h3>
    </div>

    <form action="{{ $datarecord->tahun ? route('tahun.update', $datarecord->tahun) : route('tahun.store') }}" method="POST">
        @csrf
        @if($datarecord->tahun)
        @method('PUT')
        @endif
        <div class="card-body">
            <div class="form-group">

                <label for="title" class="form-label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ old('tahun', $datarecord->tahun) }}">



            </div>
            <a href="/tahun" class="btn btn-sm btn-default">Batal</a>
            <button type="submit" class="btn btn-sm btn-primary""> Simpan</button>
       
        </div> <!-- /.card-body -->
    
        <div class=" card-body">
    </form>
</div>



@endsection