@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Borang')

@section('content')
<div class="section__content section__content--p30" style="margin-left: 50px; padding-top:20px; ;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-header" style="background-color: rgb(95, 197, 241); font-colour: white;">
                        <strong><b>Sunting Data Penggguna</b></strong>
                        <small> Borang</small>
                    </div>
                    <div class="card-body card-block shadow">
                        <form action="{{url('admin/edited-user/'.$user->id)}}" method="POST" enctype="multipart/form-data">
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
                            @method('PUT')
                            
                        
                            
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name">Name</label>
                                 </div>
                                 <div class="col col-md-3">               
                                    <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control" required>
                                 </div> 
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email">Emel</label>
                                 </div>
                                 <div class="col col-md-3">               
                                    <input type="text" name="email" id="email" value="{{$user->email}}" class="form-control" required>
                                 </div> 
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="age">Umur</label>
                                 </div>
                                 <div class="col col-md-3">               
                                    <input type="text" name="age" id="age" value="{{$user->age}}" class="form-control" required>
                                 </div> 
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="tinggi">Tinggi</label>
                                 </div>
                                 <div class="col col-md-3">               
                                    <input type="text" name="tinggi" id="tinggi" value="{{$user->tinggi}}" class="form-control" required>
                                 </div> 
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="berat">Berat</label>
                                 </div>
                                 <div class="col col-md-3">               
                                    <input type="text" name="berat" id="berat" value="{{$user->berat}}" class="form-control" required>
                                 </div> 
                              </div>
                        
                              <div class="row form-group">
                                <div class="col col-md-3">
                            <label for="state" class=" form-control-label">Current Image</label>
                                </div>
                                <div class="col-5 col-md-9">
                                    <img src="{{$user->picture}}" class="shadow" style="height: 100px;" alt="User Image">
                                </div>
                        </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="picture" class=" form-control-label">Upload Logo</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="picture" name="picture" class="form-control-file">
                                </div>
                            </div>

                        <div class="card-footer" align="center">
                            <button type="submit" class="btn btn-primary" style="margin-right: 70px;">
                                <i class="fa fa-dot-circle-o"></i> Hantar
                            </button>
                            <button type="reset" class="btn btn-danger">
                                <i class="fa fa-ban"></i> Set Semula
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="jquery-3.4.1.min.js"></script>
<script src="bootstrap/js/popper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/my-login.js"></script>
@endsection

