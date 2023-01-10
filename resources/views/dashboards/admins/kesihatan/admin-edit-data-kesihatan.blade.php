@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Sunting Data Kesihatan')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            &nbsp;
            <h3 class="text-center">Senarai Data Kesihatan Pengguna</h3>
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
        <tr role="row">
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ID</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nama</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Terima Rawatan?</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Tekanan Darah</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tekanan Gula</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Diabetes</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Penyakit Jantung</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Batuk</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Penyakit Buah Pinggang</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Pernah melakukan Pembedahan?</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Penyakit Lain</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tindakan</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($kesihatan as $Kesihatan)
                            <tr class="tr-shadow">
                                <td>{{$Kesihatan->id}}</td>
                                <td>{{$Kesihatan->user_name}}</td>
                                <td>{{$Kesihatan->rawatan}}</td>
                                <td>{{$Kesihatan->rawatan_desc}}</td>
                                <td>{{$Kesihatan->darah}}</td>
                                <td>{{$Kesihatan->darah_desc}}</td>
                                <td>{{$Kesihatan->gula}}</td>
                                <td>{{$Kesihatan->gula_desc}}</td>
                                <td>{{$Kesihatan->diabetes}}</td>
                                <td>{{$Kesihatan->diabetes_desc}}</td>
                                <td>{{$Kesihatan->jantung}}</td>
                                <td>{{$Kesihatan->jantung_desc}}</td>
                                <td>{{$Kesihatan->batuk}}</td>
                                <td>{{$Kesihatan->batuk_desc}}</td>
                                <td>{{$Kesihatan->kidney}}</td>
                                <td>{{$Kesihatan->kidney_desc}}</td>
                                <td>{{$Kesihatan->pembedahan}}</td>
                                <td>{{$Kesihatan->pembedahan_desc}}</td>
                                <td>{{$Kesihatan->penyakit_lain}}</td>
                                <td>{{$Kesihatan->penyakit_lain_desc}}</td>
                                    <td>
                                <div class="table-data-feature">
                                    
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('/admin/edit-kesihatan/'.$Kesihatan->id)}}">
                                            <ion-icon name="create-outline" ></ion-icon>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{url('/admin/delete-kesihatan/'.$Kesihatan->id)}}" onclick="return confirm('Are you sure to delete this shop?')">
                                            <ion-icon name="trash-outline" ></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                          <tfoot>
                        
        </tfoot>
      </table> </div></div>

</div>
</div>
    </div>
    <!-- /.card-body -->
  </div>

@endsection
