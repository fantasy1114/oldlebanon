
@extends('layouts/contentLayoutMaster')

@section('title', 'agGrid Table')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/ag-grid/ag-grid.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/ag-grid/ag-theme-material.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/tables/table-ag-grid.css')) }}">
@endsection

@section('content')
<!-- Basic example section start -->
<section id="basic-examples">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-12">
          <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
            <div class="dropdown sort-dropdown mb-1 mb-sm-0">
              <button
                class="btn filter-btn dropdown-toggle border text-dark"
                type="button"
                id="dropdownMenuButton6"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                1 - 20 of 500
              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                <a class="dropdown-item" href="javascript:void(0);">20</a>
                <a class="dropdown-item" href="javascript:void(0);">50</a>
                <a class="dropdown-item" href="javascript:void(0);">100</a>
                <a class="dropdown-item" href="javascript:void(0);">150</a>
              </div>
            </div>
            <div class="ag-btns d-flex flex-wrap">
              <input
                type="text"
                class="ag-grid-filter form-control w-50 mr-1 mb-1 mb-sm-0"
                id="filter-text-box"
                placeholder="Search...."
              />
              <div class="btn-export">
                <button class="btn btn-primary ag-grid-export-btn">Export as CSV</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="myGrid" class="aggrid ag-theme-material"></div>
    </div>
  </div>
</section>
<!-- // Basic example section end -->

@endsection
@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/ag-grid/ag-grid-community.min.noStyle.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-ag-grid.js')) }}"></script>
@endsection
