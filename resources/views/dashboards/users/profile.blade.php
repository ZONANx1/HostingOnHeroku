@extends('dashboards.users.layouts.user-dash-layout')
@section('title', 'Profil Pengguna')

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
                        <li class="breadcrumb-item active">Profil Pengguna</li>
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
                                <img class="profile-user-img img-fluid img-circle user_picture"
                                    src="{{ Auth::user()->picture }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center user_name">{{ Auth::user()->name }}</h3>

                            <p class="text-muted text-center">Pengguna</p>

                            <input type="file" name="user_image" id="user_image"
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
                        <div class="card-heker p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#personal_info"
                                        data-toggle="tab">Maklumat Peribadi</a></li>
                                <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Tukar
                                        Kata Laluan </a></li>
                                <li class="nav-item"><a class="nav-link" href="#bmi" data-toggle="tab">Kiraan Jisim Badan
                                        Indeks (BMI)</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="personal_info">
                                    <form class="form-horizontal" method="POST" action="{{ route('userUpdateInfo') }}"
                                        id="UserInfoForm">
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
                                                    placeholder="Emel" value="{{ Auth::user()->email }}" name="email">
                                                <span class="text-danger error-text email_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputAge" class="col-sm-2 col-form-label">Umur</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputAge" placeholder="Umur"
                                                    value="{{ Auth::user()->age }}" name="age">
                                                <span class="text-danger error-text age_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputTinggi" class="col-sm-2 col-form-label">Tinggi</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="Tinggi"
                                                    placeholder="Tinggi" value="{{ Auth::user()->tinggi }}" name="tinggi">
                                                <span class="text-danger error-text age_error"></span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputBerat" class="col-sm-2 col-form-label">Berat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="Berat"
                                                    placeholder="Berat" value="{{ Auth::user()->berat }}" name="berat">
                                                <span class="text-danger error-text age_error"></span>
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
                                    <form class="form-horizontal" action="{{ route('userChangePassword') }}"
                                        method="POST" id="changePasswordUserForm">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Kata Laluan
                                                Lama</label>
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

                                <div class="tab-pane" id="bmi">
                                    <form id="bmi-form" onsubmit="return calcBMI();">
                                        <div class="bmi-label">System:</div>
                                        <div class="bmi-row">
                                            <label>
                                                <input type="radio" id="bmi-metric" name="bmi-measure"
                                                    onchange="measureBMI()" checked /> Metric
                                            </label>
                                            <label>
                                                <input type="radio" id="bmi-imperial" name="bmi-measure"
                                                    onchange="measureBMI()" /> Imperial
                                            </label>
                                        </div>

                                        <div class="bmi-label">
                                            Weight (<span id="bmi-weight-unit">KG</span>):
                                        </div>
                                        <div class="bmi-row">
                                            <input id="bmi-weight" type="number" min="1" max="635"
                                                value="{{ Auth::user()->berat }}" required />
                                        </div>

                                        <div class="bmi-label">Height (<span id="bmi-height-unit">CM</span>):</div>
                                        <div class="bmi-row">
                                            <input id="bmi-height" type="number" min="54" max="272"
                                                value="{{ Auth::user()->tinggi }}" required />
                                        </div>
                                        <hr>
                                        <input type="submit" value="Calculate BMI" />
                                        <span id="bmi-results"></span>
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
    <script>
        // (A) CHANGE BMI MEASURING SYSTEM
        function measureBMI() {
            // (A1) GET HTML ELEMENTS
            let unit = document.getElementById("bmi-metric").checked,
                weight = document.getElementById("bmi-weight"),
                weightu = document.getElementById("bmi-weight-unit"),
                height = document.getElementById("bmi-height"),
                heightu = document.getElementById("bmi-height-unit");

            // (A2) UPDATE HTML FORM FIELDS
            // TRUE = METRIC, FALSE = IMPERIAL
            if (unit) {
                weightu.innerHTML = "KG";
                weight.min = 1;
                weight.max = 635;
                heightu.innerHTML = "CM";
                height.min = 54;
                height.max = 272;
            } else {
                weightu.innerHTML = "LBS";
                weight.min = 2;
                weight.max = 1400;
                heightu.innerHTML = "IN";
                height.min = 21;
                height.max = 107;
            }
        }

        // (B) CALCULATE BMI
        function calcBMI() {
            // (B1) GET HTML ELEMENTS
            let bmi = null,
                unit = document.getElementById("bmi-metric").checked, // true = metric, false = imperial
                weight = parseInt(document.getElementById("bmi-weight").value),
                height = parseInt(document.getElementById("bmi-height").value),
                results = document.getElementById("bmi-results");

            // (B2) CALCULATE BMI
            // METRIC BMI = MASS (KG) / HEIGHT (M) SQUARE
            if (unit) {
                height = height / 100;
                bmi = weight / (height * height);
            }
            // IMPERIAL BMI = 703 X MASS (LBS) / HEIGHT (IN) SQUARE
            else {
                bmi = 703 * (weight / (height * height));
            }
            // ROUND OFF
            bmi = Math.round(bmi * 100) / 100; // Round off 2 decimal places

            // (B3) SHOW RESULTS
            if (bmi < 18.5) {
                results.innerHTML = bmi + " - Underweight";
            } else if (bmi < 25) {
                results.innerHTML = bmi + " - Normal weight";
            } else if (bmi < 30) {
                results.innerHTML = bmi + " - Pre-obesity";
            } else if (bmi < 35) {
                results.innerHTML = bmi + " - Obesity class I";
            } else if (bmi < 40) {
                results.innerHTML = bmi + " - Obesity class II";
            } else {
                results.innerHTML = bmi + " - Obesity class III";
            }
            return false;
        }
    </script>
@endsection
