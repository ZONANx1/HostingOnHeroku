@extends('dashboards.admins.layouts.admin-dash-layout')
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
        <h4>Hi Admin: {{ Auth::user()-> name }}</h4>
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


  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Bilangan Pengguna</span>
        <span class="info-box-number">{{ $total }}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
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
        <span class="info-box-number">{{ $total_pembelajaran }} </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  

  <div class="col-md-6">
    <!-- USERS LIST -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Ahli</h3>

        <div class="card-tools">
          <span class="badge badge-danger">
            {{ $total }} ahli</span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <ul class="users-list clearfix">
          <li>
            <img src="users\images\Pok Lang.png" alt="User Image">
            <a class="users-list-name" href="#">Pok Lang</a>
            
          </li>
          <li>
            <img src="users\images\Zain.png" alt="User Image">
            <a class="users-list-name" href="#">Zain</a>
            
          </li>
          <li>
            <img src="users\images\Norresah.png" alt="User Image">
            <a class="users-list-name" href="#">Norresah</a>
            
          </li>
          <li>
            <img src="users\images\Shamah.png" alt="User Image">
            <a class="users-list-name" href="#">Shamh</a>
            
          </li>
        </ul>

        
        <!-- /.users-list -->
      </div>
      
      <!-- /.card-body -->
      <div class="card-footer text-center">
       
      </div>
      <!-- /.card-footer -->
    </div>
    <!--/.card -->
  </div>
</div>
</div>

<div class="card bg-gradient-success" style="position: relative; left: 370px; top: 0px; width: 500px;">
  <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

    <h3 class="card-title">
      <i class="far fa-calendar-alt"></i>
      Calendar
    </h3>
    <!-- tools card -->
    <div class="card-tools">
      <!-- button with a dropdown -->
      <div class="btn-group">
        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
          <i class="fas fa-bars"></i>
        </button>
        <div class="dropdown-menu" role="menu">
          <a href="#" class="dropdown-item">Add new event</a>
          <a href="#" class="dropdown-item">Clear events</a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">View calendar</a>
        </div>
      </div>
      <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <!-- /. tools -->
  </div>
  <!-- /.card-header -->
  <div class="card-body pt-0">
    <!--The calendar -->
    <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="06/26/2022" class="day old weekend">26</td><td data-action="selectDay" data-day="06/27/2022" class="day old">27</td><td data-action="selectDay" data-day="06/28/2022" class="day old">28</td><td data-action="selectDay" data-day="06/29/2022" class="day old">29</td><td data-action="selectDay" data-day="06/30/2022" class="day old">30</td><td data-action="selectDay" data-day="07/01/2022" class="day">1</td><td data-action="selectDay" data-day="07/02/2022" class="day weekend">2</td></tr><tr><td data-action="selectDay" data-day="07/03/2022" class="day weekend">3</td><td data-action="selectDay" data-day="07/04/2022" class="day">4</td><td data-action="selectDay" data-day="07/05/2022" class="day">5</td><td data-action="selectDay" data-day="07/06/2022" class="day">6</td><td data-action="selectDay" data-day="07/07/2022" class="day active today">7</td><td data-action="selectDay" data-day="07/08/2022" class="day">8</td><td data-action="selectDay" data-day="07/09/2022" class="day weekend">9</td></tr><tr><td data-action="selectDay" data-day="07/10/2022" class="day weekend">10</td><td data-action="selectDay" data-day="07/11/2022" class="day">11</td><td data-action="selectDay" data-day="07/12/2022" class="day">12</td><td data-action="selectDay" data-day="07/13/2022" class="day">13</td><td data-action="selectDay" data-day="07/14/2022" class="day">14</td><td data-action="selectDay" data-day="07/15/2022" class="day">15</td><td data-action="selectDay" data-day="07/16/2022" class="day weekend">16</td></tr><tr><td data-action="selectDay" data-day="07/17/2022" class="day weekend">17</td><td data-action="selectDay" data-day="07/18/2022" class="day">18</td><td data-action="selectDay" data-day="07/19/2022" class="day">19</td><td data-action="selectDay" data-day="07/20/2022" class="day">20</td><td data-action="selectDay" data-day="07/21/2022" class="day">21</td><td data-action="selectDay" data-day="07/22/2022" class="day">22</td><td data-action="selectDay" data-day="07/23/2022" class="day weekend">23</td></tr><tr><td data-action="selectDay" data-day="07/24/2022" class="day weekend">24</td><td data-action="selectDay" data-day="07/25/2022" class="day">25</td><td data-action="selectDay" data-day="07/26/2022" class="day">26</td><td data-action="selectDay" data-day="07/27/2022" class="day">27</td><td data-action="selectDay" data-day="07/28/2022" class="day">28</td><td data-action="selectDay" data-day="07/29/2022" class="day">29</td><td data-action="selectDay" data-day="07/30/2022" class="day weekend">30</td></tr><tr><td data-action="selectDay" data-day="07/31/2022" class="day weekend">31</td><td data-action="selectDay" data-day="08/01/2022" class="day new">1</td><td data-action="selectDay" data-day="08/02/2022" class="day new">2</td><td data-action="selectDay" data-day="08/03/2022" class="day new">3</td><td data-action="selectDay" data-day="08/04/2022" class="day new">4</td><td data-action="selectDay" data-day="08/05/2022" class="day new">5</td><td data-action="selectDay" data-day="08/06/2022" class="day new weekend">6</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2022</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year active">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
  </div>
  <!-- /.card-body -->
</div>



@endsection
