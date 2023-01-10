@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Profil Admin')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Halaman Utama</a></li>
                        <li class="breadcrumb-item active">Profil Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle admin_picture"
                                    src="{{ Auth::user()->picture }}" alt="Admin profile picture">
                            </div>

                            <h3 class="profile-username text-center admin_name">{{ Auth::user()->name }}</h3>

                            <p class="text-muted text-center">Admin</p>

                            <input type="file" name="admin_image" id="admin_image"
                                style="opacity: 0;height:1px;display:none">
                            <a href="javascript:void(0)" class="btn btn-primary btn-block" id="change_picture_btn"><b>Tukar
                                    Gambar</b></a>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#personal_info"
                                        data-toggle="tab">Maklumat Peribadi</a></li>
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Tukar
                                        Kata Laluan </a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal_info">
                                    <form class="form-horizontal" method="POST" action="{{ route('adminUpdateInfo') }}"
                                        id="AdminInfoForm">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName" placeholder="Name"
                                                    value="{{ Auth::user()->name }}" name="name">

                                                <span class="text-danger error-text name_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Emel</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail"
                                                    placeholder="Email" value="{{ Auth::user()->email }}" name="email">
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="change_password">
                                    <form class="form-horizontal" action="{{ route('adminChangePassword') }}" method="POST"
                                        id="changePasswordAdminForm">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Kata Laluan Lama</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputName"
                                                    placeholder="Masukkan kata laluan lama" name="oldpassword">
                                                <span class="text-danger error-text oldpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Kata Laluan
                                                Baharu</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="newpassword"
                                                    placeholder="Masukkan kata laluan baharu" name="newpassword">
                                                <span class="text-danger error-text newpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Sahkan Kata Laluan
                                                Baharu</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="cnewpassword"
                                                    placeholder="Sahkan kata laluan baharu" name="cnewpassword">
                                                <span class="text-danger error-text cnewpassword_error"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Kemas Kini Kata
                                                    Laluan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
