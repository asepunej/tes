@extends('layouts.main')

@section('content')

<div class="card card-info">
    <div class="card-header">
        <table>
            <tr>
                <th align='center' width=100%>
                    <h3 class="card-title">Daftar Paket</h3>
                    </td>
                <th align='right' width=10%>
                    <a href="/paket/create" class="btn btn-sm btn-info">
                        Tambah
                    </a>
                    </td>
            </tr>
        </table>
    </div>

    <div class="card-body">
        <table class="table" width="100%">
            <tr>
                <td valign="top">Tahun</td>
                <td valign="top">:</td>
                <td valign="top">&nbsp;</td>
                <td align="right">&nbsp;</td>
            </tr>
            <tr>
                <td width="20%" valign="top">Perusahaan</td>
                <td width="5%" valign="top">:</td>
                <td width="60%" valign="top">&nbsp;</td>
                <td width="15%" align="right">

                </td>
            </tr>
        </table>


        <table width="100%" class="table table-bordered table-striped" id="example2">
            <thead>
                <tr>
                    <th align='center' width=5%>No</th>
                    <th align='center' width=40%>Nama paket</th>
                    <th align='center' width=25%>Lokasi</th>
                    <th align='center' width=10%>Nominal</th>
                    <th align='center' width=10%>Proses</th>
                    <th align='center' width=10%>Aksi</th>
                </tr>
            </thead>

            <?php $number = 1; ?>
            <?php foreach ($datapaket as $value): ?>
                <tr height="30" onmouseover="this.className='highlight'" onmouseout="this.className='normal'">
                    <td width="5%" align="center" valign="top">{{ $number++}} </td>
                    <td width="40%" align="left" valign="top">{{$value->uraian}} <br>
                        <span class="badge bg-success">{{$value->nama_perusahaan}} </span>
                    </td>
                    <td width="25%" align="left" valign="top">{{$value->mitra}} <br>
                        <span class="badge bg-warning">{{$value->lokasi}} </span>
                    </td>

                    <td width="10%" align='left' valign="top">{{number_format($value->nilai_kontrak, 0, ",", '.')}}</td>
                    <td width="10%" align='left' valign="top">{{$value->kd_proses}}</td>
                    <td width="10%" align='left' valign="top">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" id="aksi">Pilih</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span></button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="/paket/edit/{{$value->id}}">
                                    Edit </a>

                                <form action="/paket/delete{{$value->id}}" method="post" onclick="return confirm ('Yakin Akan dihapus') ">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
    <!-- /.card-body -->
</div>



@endsection