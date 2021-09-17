@extends('layouts/contentLayoutMaster')

@section('title', 'Chartjs')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
 <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <p>
      You can easily create reuseable chart components. Read full documentation
      <a href="https://www.chartjs.org/docs/latest/getting-started/" target="_blank">here</a>.
    </p>
  </div>
</div>
<!-- ChartJS section start -->
<section id="chartjs-chart">
  <div class="row">
    <!--Bar Chart Start -->
    <div class="col-xl-6 col-12">
      <div class="card">
        <div
          class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column"
        >
          <div class="header-left">
            <h4 class="card-title">Latest Statistics</h4>
          </div>
          <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
            <i data-feather="calendar"></i>
            <input
              type="text"
              class="form-control flat-picker border-0 shadow-none bg-transparent pr-0"
              placeholder="YYYY-MM-DD"
            />
          </div>
        </div>
        <div class="card-body">
          <canvas class="bar-chart-ex chartjs" data-height="400"></canvas>
        </div>
      </div>
    </div>
    <!-- Bar Chart End -->

    <!-- Horizontal Bar Chart Start -->
    <div class="col-xl-6 col-12">
      <div class="card">
        <div
          class="card-header d-flex justify-content-between align-items-sm-center align-items-start flex-sm-row flex-column"
        >
          <div class="header-left">
            <p class="card-subtitle text-muted mb-25">Balance</p>
            <h4 class="card-title">$74,123</h4>
          </div>
          <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
            <i data-feather="calendar"></i>
            <input
              type="text"
              class="form-control flat-picker border-0 shadow-none bg-transparent pr-0"
              placeholder="YYYY-MM-DD"
            />
          </div>
        </div>
        <div class="card-body">
          <canvas class="horizontal-bar-chart-ex chartjs" data-height="400"></canvas>
        </div>
      </div>
    </div>
    <!-- Horizontal Bar Chart End -->
  </div>

  <!-- Line Chart Starts-->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h4 class="card-title">Statistics</h4>
            <span class="card-subtitle text-muted">Commercial networks and enterprises</span>
          </div>
          <div class="d-flex d-flex align-items-center mt-1 mt-sm-0">
            <div class="mr-1">
              <h5 class="font-weight-bold mb-25">$8,582</h5>
              <span class="bullet bullet-primary bullet-sm align-middle cursor-pointer"></span>
              <span class="align-middle cursor-pointer">Asia</span>
            </div>
            <div class="mr-1">
              <h5 class="font-weight-bold mb-25">$7,397</h5>
              <span class="bullet bullet-danger bullet-sm align-middle cursor-pointer"></span>
              <span class="align-middle cursor-pointer">Europe</span>
            </div>
            <div>
              <h5 class="font-weight-bold mb-25">$4,786</h5>
              <span class="bullet bullet-sm align-middle cursor-pointer" style="background-color: #ffe800"></span>
              <span class="align-middle cursor-pointer">Africa</span>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas class="line-chart-ex chartjs" data-height="450"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Line Chart Ends-->

  <div class="row">
    <!-- Radar Chart Starts-->
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-row justify-content-between align-items-center">
          <h4 class="card-title">Radar Chart</h4>
          <div class="d-flex align-items-center flex-wrap">
            <div id="tooltip" class="tooltip-placeholder"></div>
          </div>
        </div>
        <div class="card-body">
          <canvas class="radar-chart-ex chartjs" id="canvas" data-height="355"></canvas>
        </div>
      </div>
    </div>
    <!-- Radar Chart Ends-->

    <!-- Polar Area Chart Starts -->
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Average Skills</h4>
          <div class="dropdown">
            <i
              data-feather="more-vertical"
              class="cursor-pointer"
              role="button"
              id="heat-chart-dd"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
            </i>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="heat-chart-dd">
              <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
              <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <canvas class="polar-area-chart-ex chartjs" data-height="350"></canvas>
        </div>
      </div>
    </div>
    <!-- Polar Area Chart Ends-->
  </div>

  <!-- Bubble Chart Starts -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bubble Chart</h4>
          <div class="d-flex align-items-center flex-wrap">
            <h5 class="font-weight-bolder mb-0 mr-1">$ 100,000</h5>
            <span class="badge badge-light-secondary">
              <i class="text-danger font-small-3" data-feather="arrow-down"></i>
              <span class="align-middle">20%</span>
            </span>
          </div>
        </div>
        <div class="card-body">
          <canvas class="bubble-chart-ex chartjs" data-height="500"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Bubble Chart Ends -->

  <div class="row">
    <!-- Donut Chart Starts -->
    <div class="col-lg-4 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sessions By Device</h4>
        </div>
        <div class="card-body">
          <canvas class="doughnut-chart-ex chartjs mt-1" data-height="275"></canvas>
          <div class="d-flex justify-content-between mt-3 mb-1">
            <div class="d-flex align-items-center">
              <i data-feather="monitor" class="font-medium-2 text-primary"></i>
              <span class="font-weight-bold ml-75 mr-25">Desktop</span>
              <span>- 80%</span>
            </div>
            <div>
              <span>2%</span>
              <i data-feather="arrow-up" class="text-success"></i>
            </div>
          </div>
          <div class="d-flex justify-content-between mb-1">
            <div class="d-flex align-items-center">
              <i data-feather="tablet" class="font-medium-2 text-warning"></i>
              <span class="font-weight-bold ml-75 mr-25">Mobile</span>
              <span>- 10%</span>
            </div>
            <div>
              <span>8%</span>
              <i data-feather="arrow-up" class="text-success"></i>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
              <i data-feather="tablet" class="font-medium-2 text-success"></i>
              <span class="font-weight-bold ml-75 mr-25">Tablet</span>
              <span>- 10%</span>
            </div>
            <div>
              <span>-5%</span>
              <i data-feather="arrow-down" class="text-danger"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Donut Chart Starts -->

    <!-- Scatter Chart Starts  -->
    <div class="col-lg-8 col-12">
      <div class="card">
        <div
          class="card-header d-flex justify-content-between align-items-baseline align-items-sm-center flex-sm-row flex-column"
        >
          <div>
            <h4 class="card-title mb-25">New Product Data</h4>
            <div class="d-flex align-items-center">
              <div class="cursor-pointer mr-1">
                <span class="bullet bullet-primary bullet-sm align-middle"></span>
                <span class="align-middle">Iphone</span>
              </div>
              <div class="cursor-pointer mr-1">
                <span class="bullet bullet-sm align-middle" style="background-color: #ffe800"></span>
                <span class="align-middle">Samsung Note</span>
              </div>
              <div class="cursor-pointer">
                <span class="bullet bullet-success bullet-sm align-middle"></span>
                <span class="align-middle">OnePlus</span>
              </div>
            </div>
          </div>
          <div class="btn-group btn-group-toggle mt-md-0 mt-1" data-toggle="buttons">
            <label class="btn btn-outline-primary active">
              <input type="radio" name="radio_options" id="radio_option1" checked="" />
              <span>Daily</span>
            </label>
            <label class="btn btn-outline-primary">
              <input type="radio" name="radio_options" id="radio_option2" />
              <span>Monthly</span>
            </label>
            <label class="btn btn-outline-primary">
              <input type="radio" name="radio_options" id="radio_option3" />
              <span>Yearly</span>
            </label>
          </div>
        </div>
        <div class="card-body">
          <canvas class="scatter-chart-ex chartjs" data-height="415"></canvas>
        </div>
      </div>
    </div>
    <!-- Scatter Chart Ends  -->
  </div>

  <!-- Area Chart Starts -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-baseline flex-sm-row flex-column">
          <div>
            <h4 class="card-title">Data Science</h4>
            <div class="d-flex align-items-center mt-25">
              <div class="cursor-pointer mr-1">
                <span class="bullet bullet-sm align-middle" style="background-color: #2b9aff"></span>
                <span class="align-middle">Visit</span>
              </div>
              <div class="cursor-pointer mr-1">
                <span class="bullet bullet-sm align-middle" style="background-color: #84d0ff"></span>
                <span class="align-middle">Clicks</span>
              </div>
              <div class="cursor-pointer">
                <span class="bullet bullet-sm align-middle" style="background-color: #edf1f4"></span>
                <span class="align-middle">Sales</span>
              </div>
            </div>
          </div>
          <div class="header-right d-flex align-items-center mt-sm-0 mt-1">
            <i data-feather="calendar"></i>
            <input
              type="text"
              class="form-control flat-picker border-0 shadow-none bg-transparent pr-0"
              placeholder="YYYY-MM-DD"
            />
          </div>
        </div>
        <div class="card-body">
          <canvas class="line-area-chart-ex chartjs" data-height="450"></canvas>
        </div>
      </div>
    </div>
  </div>
  <!-- Area Chart Ends -->
</section>
<!-- ChartJS section end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/charts/chart.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/charts/chart-chartjs.js')) }}"></script>
@endsection
