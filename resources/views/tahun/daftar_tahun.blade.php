@extends('layouts.main')

@section('content')
<div class="card card-info">
    <div class="card-header">
        <table>
            <tr>
                <th align='center' width=100%>
                    <h3 class="card-title">Data Tahun</h3>
                    </td>
                <th align='right' width=10%>
                    <a href="/tahun/create" class="btn btn-success mb-3">Tambah</a>
                    </td>
            </tr>
        </table>
    </div>

    <div class="card-body">


        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th align='center' width=5%>No</th>
                    <th align='center' width=15%>Tahun</th>
                    <th align='center' width=10%>Aksi</th>

                </tr>
            </thead>

            <?php $number = 1; ?>
            <?php foreach ($tahun as $value): ?>
                <tr height="30" onmouseover="this.className='highlight'" onmouseout="this.className='normal'">
                    <td width="5%" align="center" valign="top">{{ $number++}} </td>
                    <td width="85%" align="left" valign="top">{{$value->tahun}}</td>
                    <td width="10%" align='left' valign="top">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default" id="aksi">Pilih</button>
                            <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span></button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ route('tahun.edit', $value->tahun) }}">
                                    Edit
                                </a>

                                <form action="/tahun/delete/{{$value->tahun}}" method="post" onclick="return confirm ('Yakin Akan dihapus') ">
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