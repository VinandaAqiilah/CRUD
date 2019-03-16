@extends('master.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->



    <section class="content-header">
<h1>Data Kategori</h1>
<br>
     
    

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Data Kategori</h3>
       
            </div>

            <div class="box-body">
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                Tambah Data
              </button><br><br>

          
          <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modaal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Kategori</h4>
              </div>
                <form class="form-horizontal" action="/inputdata/store" method="post">
                {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama_Kategori</label>

                  <div class="col-sm-10">`
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama_Kategori">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">slug</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" placeholder="slug">
                  </div>
                </div>
          
              </div>
              <!-- /.box-body -->
             
              <!-- /.box-footer -->
            
              <div class="modal-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">save</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
            <table class="table table-bordered table-striped">
              <thead>
               <tr>
                <th>ID</th>
                <th>Nama Kategori</th>
                <th>Slug</th>
                <th>Tanggal Input Date</th>
                 <th>Tanggal_updata</th>
                <th>Opsi</th></tr>

             @foreach($kategori as $kategori)
                 <tr>
                  <td>{{$kategori->id}}</td>
                  <td>{{$kategori->nama_kategori}}</td>
                   <td>{{$kategori->slug}}</td>
                   <td>{{$kategori->created_at}}</td>
                   <td>{{$kategori->updated_at}}</td>
                     <td>  <a href="/kategoriedit/edit/{{ $kategori->id }}">Edit</a> | <a href="/hapus/destroy/{{ $kategori->id }}">Hapus</a></td>
    </tr>
  @endforeach
            </table> 
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  
    <!-- /.content -->
@endsection



