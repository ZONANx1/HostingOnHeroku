@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Sunting Pengguna')

<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            &nbsp;
            <h3 class="text-center">Senarai Pengguna</h3>
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
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Gambar</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nama</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Emel</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Umur</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tinggi (CM)</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Berat (KG)</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tindakan</th>

    

         
        </thead>
        <tbody>
            @foreach ($user as $User)
                            <tr class="tr-shadow">
                                <td>{{$User->id}}</td>
                                <td>
                                    <img src="{{ $User->picture }}" class="shadow" style="height: 50px;" alt="User Image">
                                </td>
                                <td>{{$User->name}}</td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->age}}</td>
                                <td>{{$User->tinggi}}</td>
                                <td>{{$User->berat}}</td>
                  
                               
                                    <td>
                                <div class="table-data-feature">
                                    
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{url('/admin/edit-user/'.$User->id)}}">
                                            <ion-icon name="create-outline" ></ion-icon>
                                        </a>
                                        <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="{{url('/admin/delete-user/'.$User->id)}}" onclick="return confirm('Are you sure to delete this shop?')">
                                            <ion-icon name="trash-outline" ></ion-icon>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                            
                        </tbody>
                        
       </table>
       {!! $user->links() !!}  
       </div>
       </div>
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
  
