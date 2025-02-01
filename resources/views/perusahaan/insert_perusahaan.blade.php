@extends('layouts.main')

@section('content')

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Tambah Perusahaan</h3>
  </div>

  <form action="/perusahaan/store" method="POST">
    @csrf

    <div class="card-body">
      <div class="form-group">
        <table width="100%" border="0">
          <tr>
            <td width="20%">Nama Perusahaan </td>
            <td width="5%">:</td>
            <td width="75%"><input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" />
              @error('nama_perusahaan') <div class="invalid-feedback">{{ $message }}</div>@enderror</td>
          </tr>
          <tr>
            <td width="20%">NPWP</td>
            <td width="5%">:</td>
            <td width="75%"><input type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" value="{{ old('npwp') }}">
              @error('npwp') <div class="invalid-feedback">{{ $message }}</div>@enderror </td>
          </tr>
          <tr>
            <td width="20%">Alamat</td>
            <td width="5%">:</td>
            <td width="75%"> <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}">
              @error('alamat') <div class="invalid-feedback">{{ $message }}</div>@enderror</td>
          </tr>
          <tr>
            <td width="20%">notelp</td>
            <td width="5%">:</td>
            <td width="75%"> <input type="text" class="form-control @error('notelp') is-invalid @enderror" name="notelp" value="{{ old('notelp') }}">
              @error('notelp') <div class="invalid-feedback">{{ $message }}</div>@enderror

            </td>
          </tr>
          <tr>
            <td width="20%">Email</td>
            <td width="5%">:</td>
            <td width="75%"> <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
              @error('notelp') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </td>
          </tr>
          <tr>
            <td width="20%">Nama Bank</td>
            <td width="5%">:</td>
            <td width="75%"> <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" value="{{ old('nama_bank') }}">
              @error('nama_bank') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </td>
          </tr>
          <tr>
            <td width="20%">No Rekening</td>
            <td width="5%">:</td>
            <td width="75%"> <input type="text" class="form-control @error('no_rek') is-invalid @enderror" name="no_rek" value="{{ old('no_rek') }}">
              @error('no_rek') <div class="invalid-feedback">{{ $message }}</div>@enderror

            </td>
          </tr>
          <tr>
            <td width="20%">Nama Direktur</td>
            <td width="5%">:</td>
            <td width="75%"> <input type="text" class="form-control @error('direktur') is-invalid @enderror" name="direktur" value="{{ old('direktur') }}">
              @error('direktur') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </td>
          </tr>
          <tr>
            <td width="20%"></td>
            <td width="5%"></td>
            <td width="75%">
              <a href="/perusahaan" class="btn btn-sm btn-default">Batal</a>
              <button type="submit" class="btn btn-sm btn-primary""> Simpan</button>
            </td>
          </tr>
        </table>
      </div>
        </div> <!-- /.card-body -->
        <div class=" card-body">
  </form>
</div>



@endsection