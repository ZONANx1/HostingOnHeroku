@extends('dashboards.users.layouts.user-dash-layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card-header">
                <h3 class="card-title">Indeks Jisim Badan Pengguna</h3>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <hr>
                        <form method="POST" id="result" action="" @submit.prevent="onSubmit">
                            <div class="form-group">
                                <label for="peso">Berat (Kg) : </label>
                                <input type="text" name="peso" class="form-control" v-model="peso" />
                                <label for="altura">Tinggi (m) : </label>
                                <input type="text" name="altura" class="form-control" v-model="altura" />
                                <br />
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" value="Hantar" class="btn btn-success pull-right" />
                                <hr>
                                <div class="panel-heading">Keputusan :</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
