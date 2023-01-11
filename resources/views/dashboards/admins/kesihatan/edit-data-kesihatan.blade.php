@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Suntingan')

@section('content')
    <div class="section__content section__content--p30" style="margin-left: 50px; padding-top:20px; ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header" style="background-color: rgb(95, 197, 241); font-colour: white;">
                            <strong><b>Sunting Data Kesihatan</b></strong>
                            <small> Borang</small>
                        </div>
                        <div class="card-body card-block shadow">
                            <form action="{{ url('admin/edited-kesihatan/' . $kesihatan->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @if (Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if (Session::get('error'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('error') }}
                                    </div>
                                @endif
                                @csrf
                                @method('PUT')

                                <div class=" row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="rawatan" class="form-control-label">Adakah anda sedang menerima
                                            rawatan? Jika ADA, sila nyatakan.
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="rawatan" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="rawatan" value="Tiada"> Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="rawatan_desc" id="rawatan_desc" value="{{ $kesihatan->rawatan_desc }}" rows="2"
                                            placeholder="Nyatakan jika ada" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening" class=" form-control-label">Tekanan darah tinggi, tekanan
                                            darah rendah (High or low blood pressure)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="darah" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="darah" value="Tiada"> Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="darah_desc" id="darah_desc" value="{{ $kesihatan->darah_desc }}" rows="2" placeholder="Catatan"
                                            class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening" class=" form-control-label">Tekanan gula tinggi, tekanan gula
                                            rendah (High or low sugar pressure)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="gula" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="gula" value="Tiada"> Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="gula_desc" id="gula_desc" value="{{ $kesihatan->gula_desc }}" rows="2" placeholder="Catatan"
                                            class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening" class=" form-control-label">Kencing Manis (Diabetes)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="diabetes" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="diabetes" value="Tiada"> Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="diabetes_desc" id="diabetes_desc" value="{{ $kesihatan->diabetes_desc }}" rows="2"
                                            placeholder="Catatan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening"
                                            class=" form-control-label">PenAdakit jantung dan saluran darah (Cardiovascular
                                            diseases)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="jantung" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="jantung" value="Tiada">
                                        Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="jantung_desc" id="jantung_desc" value="{{ $kesihatan->jantung_desc }}" rows="2"
                                            placeholder="Catatan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening"
                                            class=" form-control-label">Batuk kering, tibi, radang paru-paru (Dry cough,
                                            tuberculosis or other lung infection)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="batuk" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="batuk" value="Tiada">
                                        Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="batuk_desc" id="batuk_desc" value="{{ $kesihatan->batuk_desc }}" rows="2"
                                            placeholder="Catatan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening" class=" form-control-label">Masalah buah pinggang & kencing
                                            (Kidney & urinary problems)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="kidney" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="kidney" value="Tiada">
                                        Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="kidney_desc" id="kidney_desc" value="{{ $kesihatan->kidney_desc }}" rows="2"
                                            placeholder="Catatan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening" class=" form-control-label">Pernah menjalani sebarang
                                            pembedahan (Any medical operation)
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="pembedahan" value="Ada" required>
                                        Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="pembedahan" value="Tiada">
                                        Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="pembedahan_desc" id="pembedahan_desc" value="{{ $kesihatan->pembedahan_desc }}" rows="2"
                                            placeholder="Catatan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <label for="pening" class=" form-control-label">Menghidap penyakit lain? Jik
                                            Ada, sila nyatakan.
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="Ada" name="penyakit_lain" value="Ada"
                                            required> Ada</input>
                                        &nbsp;
                                        <input type="radio" id="Tiada" name="penyakit_lain" value="Tiada">
                                        Tiada</input>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="penyakit_lain_desc" id="penyakit_lain_desc" value="{{ $kesihatan->penyakit_lain_desc }}"
                                            rows="2" placeholder="Nyatakan jika ada" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="" align="center">
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
