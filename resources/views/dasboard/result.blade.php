@extends('master.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Daftar Kategori</h1>
<br>
     
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              <a href="kategori"> Lihat Semua Data</a>
              <table border="3px">
              <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Tanggal Input Data</th>
                  <th>Slug</th>
                </tr>

                @foreach($kategori as $data)
                <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->nama_kategori}}</td>
                <td>{{$data->slug}}</td>
                <td>{{$data->tanggal_input_data}}</td>
                </tr>
                @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection