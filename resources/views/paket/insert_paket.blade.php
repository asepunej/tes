@extends('layouts.main')

@section('content')

<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">{{ $datapaket->id ? 'Edit Paket' : 'Tambah Paket' }} </h3>
  </div>

  <form action="{{ $datapaket->id ? route('paket.update', $datapaket->id) : route('paket.store') }}" method="POST">
    @csrf
    @if($datapaket->id)
    @method('PUT')
    @endif

    <div class="card-body">
      <div class="form-group">
        <table width="100%" border="0">
          <tr>
            <td valign="top">Tahun</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">
              <select name="optiontahun" class="custom-select rounded-0" id="tahun">
                <option value="">-- Pilih Tahun --</option>
                @foreach ($datatahun as $tahun)
                <option value="{{ $tahun->tahun }}"
                  {{ old('optiontahun', $datapaket->tahun ?? '') == $tahun->tahun ? 'selected' : '' }}>
                  {{ $tahun->tahun }}
                </option>
                @endforeach
              </select>

            </td>
          </tr>
          <tr>
            <td valign="top">Perusahaan</td>
            <td valign="top">&nbsp;</td>
            <td valign="top">
              <select name="optionperusahaan" class="custom-select rounded-0" id="optionperusahaan">
                <option value="">-- Pilih Perushaaan --</option>
                @foreach ($dataperusahaan as $value)
                <option value="{{ $value->id }}"
                  {{ old('optionperusahaaan', $datapaket->id_perusahaan ?? '') == $value->id ? 'selected' : '' }}>
                  {{ $value->nama_perusahaan }}
                </option>
                @endforeach
              </select>
            </td>
          </tr>
          <tr>
            <td valign="top">Nama Paket</td>
            <td valign="top">&nbsp;</td>
            <td valign="top"><input name="texturaian" type="text" class="form-control" placeholder="Default input" value="{{ old('uraian',$datapaket->uraian) }}" /></td>
          </tr>


          <tr>
            <td valign="top">Mitra</td>
            <td valign="top">:</td>
            <td valign="top"><input name="textmitra" type="text" class="form-control" placeholder="Default input" value="{{ old('mitra',$datapaket->mitra) }}" /></td>
          </tr>
          <tr>
            <td valign=" top">Lokasi Pekerjaan </td>
            <td valign="top">:</td>
            <td valign="top"><input name="textlokasi" type="text" class="form-control" placeholder="Default input" value="{{ old('mitra',$datapaket->lokasi) }}" /></td>
          </tr>
          <tr>
            <td valign="top">Nilai Kontrak </td>
            <td valign="top">&nbsp;</td>
            <td valign="top"><input name="textnilaikontrak" type="text" class="form-control" placeholder="Default input" value="{{ old('mitra',$datapaket->nilai_kontrak) }}" /></td>
          </tr>
          <tr>
            <td valign="top">Keterangan</td>
            <td valign="top">:</td>
            <td valign="top"><input name="textketerangan" type="text" class="form-control" placeholder="Default input" value="{{ old('mitra',$datapaket->keterangan) }}" /></td>
          </tr>
          <td width="20%"></td>
          <td width="5%"></td>
          <td width="75%">
            <a href="/paket" class="btn btn-sm btn-default">Batal</a>
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