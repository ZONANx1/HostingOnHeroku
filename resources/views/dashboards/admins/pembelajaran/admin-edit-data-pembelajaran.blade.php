@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Sunting Data Pembelajaran')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            &nbsp;
            <h3 class="text-center">Senarai Data Pembelajaran Pengguna</h3>
            <hr>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if ( Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if ( Session::get('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif
    @csrf
      <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
          <div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">

                    </div></div></div><div class="row">
                                              <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
        <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Sesi</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Kelas</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Waktu Mula</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Waktu Tamat</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Kehadiran</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Butiran</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tahap Kemajuan (%)</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tarikh</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tindakan</th></tr>
        </thead>
        <tbody>
            @foreach ($pembelajaran as $Pembelajaran)
                            <tr class="tr-shadow">
                                <td>{{$Pembelajaran->id}}</td>
                                <td>{{$Pembelajaran->user_name}}</td>
                                <td>{{$Pembelajaran->kategori}}</td>
                                <td>{{$Pembelajaran->sesi_pembelajaran}}</td>
                                <td>{{$Pembelajaran->waktu_mula}}</td>
                                <td>{{$Pembelajaran->waktu_tamat}}</td>
                                <td>{{$Pembelajaran->kehadiran}}</td>
                                <td>{{$Pembelajaran->komen}}</td>
                                <td>{{$Pembelajaran->progress}}%</td>
                                <td>{{$Pembelajaran->created_at}}</td>
                                    <td>
                                <div class="table-data-feature">
                                    
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('/admin/edit-pembelajaran/'.$Pembelajaran->id)}}">
                                            <ion-icon name="create-outline" ></ion-icon>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{url('/admin/delete-pembelajaran/'.$Pembelajaran->id)}}" onclick="return confirm('Are you sure to delete this shop?')">
                                            <ion-icon name="trash-outline" ></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                          <tfoot>
                               <tr>
                                <th rowspan="1" colspan="1">ID</th>
                                <th rowspan="1" colspan="1">Nama</th>
                                <th rowspan="1" colspan="1">Sesi</th>
                                <th rowspan="1" colspan="1">Kelas</th>                             
                                <th rowspan="1" colspan="1">Waktu Mula</th>
                                <th rowspan="1" colspan="1">Waktu Tamat</th>
                                <th rowspan="1" colspan="1">Kehadiran</th>
                                <th rowspan="1" colspan="1">Butiran</th>
                                <th rowspan="1" colspan="1">Tahap Kemajuan (%)</th>
                                <th rowspan="1" colspan="1">Tarikh</th>
                                <th rowspan="1" colspan="1">Tindakan</th>
                          </tr>
        </tfoot>
       </table> </div></div>
      </div>
     </div>
    </div>
    <!-- /.card-body -->
  </div>

  <script src="jquery-3.4.1.min.js"></script>
  <script src="bootstrap/js/popper.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="js/my-login.js"></script>
  @endsection
  
