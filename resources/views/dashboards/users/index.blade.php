@extends('dashboards.users.layouts.user-dash-layout')
@section('title', 'Papan Pemuka')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
     <div class="col-md-3">
      <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Papan Pemuka</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
          </button>
        </div>
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <h4>Hi Pengguna: {{ Auth::user()-> name }}</h4>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('Anda telah log masuk!') }}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <div class="col-12 col-sm-5 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-heartbeat"></i></span>
  
      <div class="info-box-content">
        <span class="info-box-text">Bilangan Data Kesihatan</span>
        <span class="info-box-number">{{ $total_kesihatan }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
  </div>

  <div class="col-12 col-sm-5 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>
  
      <div class="info-box-content">
        <span class="info-box-text">Bilangan Data Pembelajaran</span>

        <span class="info-box-number">{{ $total_pembelajaran }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

    </div>
</div>
@endsection
