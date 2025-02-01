@extends('layouts.main')

@section('content')

<div class="card card-info">
<div class="card-header">
        <table>
            <tr>
                <th align='center' width=100%>
                    <h3 class="card-title">Daftar Barang</h3>
                </td>
                <th align='right' width=10%>
                    <a href="/barang/create" class="btn btn-sm btn-info">
                        Tambah
                    </a>
                </td>
            </tr>
        </table>
    </div>

    <div class="card-body">


       

    <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th align='center' width=5%>No</th>
                    <th align='center' width=20%>Kode Barang</th>
                    <th align='center' width=35%>Nama Barang</th>
                    <th align='center' width=10%>Spesifikasi</th>
                    <th align='center' width=10%>Satuan</th>
                    <th align='center' width=10%>Harga</th>
                    <th align='center' width=10%>Stok</th>
                </tr>
            </thead>

            <?php $number = 1; ?>
            <?php foreach ($barang as $value): ?>
                <tr height="30" onmouseover="this.className='highlight'" onmouseout="this.className='normal'">
                    <td width="5%" align="center" valign="top">{{ $number++}} </td>
                    <td width="20%" align="center" valign="top">{{$value->kode_barang}}</td>
                    <td width="35%" align="center" valign="top">{{$value->nama_barang}} </td>
                    <td width="10%" align='center' valign="top">{{$value->spesifikasi}} </td>
                    <td width="10%" align='center' valign="top">{{$value->satuan}} </td>
                    <td width="10%" align='center' valign="top">{{$value->harga}} </td>
                    <td width="10%" align='center' valign="top">{{$value->stok}} </td>
                </tr>
            <?php endforeach; ?>

      </table>

    </div>
    <!-- /.card-body -->
</div>



@endsection