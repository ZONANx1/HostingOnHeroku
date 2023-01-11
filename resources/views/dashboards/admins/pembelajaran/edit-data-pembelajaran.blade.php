@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Borang')

@section('content')
    <div class="section__content section__content--p30" style="margin-left: 50px; padding-top:20px; ;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header" style="background-color: rgb(95, 197, 241); font-colour: white;">
                            <strong><b>Sunting Data Pembelajaran</b></strong>
                            <small> Borang</small>
                        </div>
                        <div class="card-body card-block shadow">
                            <form action="{{ url('admin/edited-pembelajaran/' . $pembelajaran->id) }}" method="POST"
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

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="kategori" class=" form-control-label">Kelas</label>
                                    </div>
                                    <div class="col-5 col-md-4">
                                        <select name="kategori" id="kategori" class="form-control" required>
                                            <option value="{{ $pembelajaran->kategori }}">Sila Pilih</option>
                                            <option value="Daurah">Daurah</option>
                                            <option value="Tadarus">Tadarus</option>
                                            <option value="Bacaan Selawat">Bacaan Selawat</option>
                                            <option value="Bacaan Surah">Bacaan Surah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="sesi_pembelajaran" class=" form-control-label" required>Sesi
                                            Pembelajaran</label>
                                    </div>
                                    <div class="col-5 col-md-4">
                                        <select name="sesi_pembelajaran" id="sesi_pembelajaran" class="form-control"
                                            required>
                                            <option value="{{ $pembelajaran->sesi_pembelajaran }}">Sila Pilih</option>
                                            <option value="Sesi Pagi">Sesi Pagi</option>
                                            <option value="Sesi Petang">Sesi Petang</option>
                                            <option value="Sesi Malam">Sesi Malam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="waktu_mula">Waktu Mula</label>
                                    </div>
                                    <div class="col col-md-3">
                                        <input type="time" name="waktu_mula" id="waktu_mula"
                                            value="{{ $pembelajaran->waktu_mula }}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="waktu_tamat">Waktu Tamat</label>
                                    </div>
                                    <div class="col col-md-3">
                                        <input type="time" name="waktu_tamat" id="waktu_tamat"
                                            value="{{ $pembelajaran->waktu_tamat }}" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="komen" class=" form-control-label">Butiran</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="komen" id="komen" rows="2" placeholder="Nyatakan jika ada" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="progress" class=" form-control-label">Tahap Kemajuan</label>
                                    </div>
                                    <div class="col-5 col-md-9">
                                        <input type="range" name="progress" id="progress" min="0" max="100"
                                            value="{{ $pembelajaran->progress }}" oninput="outputId.value = progress.value">
                                        <output id="outputId">0</output>%
                                    </div>
                                </div>
                                <div class=" row form-group">
                                    <div class="col col-md-3">
                                        <label for="kehadiran" class="form-control-label">Kehadiran
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="radio" id="ya" name="kehadiran"
                                            value="{{ $pembelajaran->kehadiran }}" checked required> Ya</input>
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
