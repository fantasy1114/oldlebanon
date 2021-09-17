
@extends('layouts/contentLayoutMaster')

@section('title', 'DataTables')

@section('vendor-style')
  {{-- vendor css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
@endsection


@section('content')
<!-- Ajax Sourced Server-side -->
<section id="ajax-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Ajax Sourced Server-side</h4>
        </div>
        <div class="card-datatable">
          <table class="datatables-ajax table">
            <thead>
              <tr>
                <th>Full name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<!--/ Ajax Sourced Server-side -->

<!-- Column Search -->
<section id="column-search-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Column Search</h4>
        </div>
        <div class="card-datatable">
          <table class="dt-column-search table table-responsive">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Column Search -->

<!-- Advanced Search -->
<section id="advanced-search-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Advanced Search</h4>
        </div>
        <!--Search Form -->
        <div class="card-body mt-2">
          <form class="dt_adv_search" method="POST">
            <div class="row">
              <div class="col-12">
                <div class="form-row mb-1">
                  <div class="col-lg-4">
                    <label>Name:</label>
                    <input
                      type="text"
                      class="form-control dt-input dt-full-name"
                      data-column="1"
                      placeholder="Alaric Beslier"
                      data-column-index="0"
                    />
                  </div>
                  <div class="col-lg-4">
                    <label>Email:</label>
                    <input
                      type="text"
                      class="form-control dt-input"
                      data-column="2"
                      placeholder="demo@example.com"
                      data-column-index="1"
                    />
                  </div>
                  <div class="col-lg-4">
                    <label>Post:</label>
                    <input
                      type="text"
                      class="form-control dt-input"
                      data-column="3"
                      placeholder="Web designer"
                      data-column-index="2"
                    />
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-4">
                    <label>City:</label>
                    <input
                      type="text"
                      class="form-control dt-input"
                      data-column="4"
                      placeholder="Balky"
                      data-column-index="3"
                    />
                  </div>
                  <div class="col-lg-4">
                    <label>Date:</label>
                    <div class="form-group mb-0">
                      <input
                        type="text"
                        class="form-control dt-date flatpickr-range dt-input"
                        data-column="5"
                        placeholder="StartDate to EndDate"
                        data-column-index="4"
                        name="dt_date"
                      />
                      <input
                        type="hidden"
                        class="form-control dt-date start_date dt-input"
                        data-column="5"
                        data-column-index="4"
                        name="value_from_start_date"
                      />
                      <input
                        type="hidden"
                        class="form-control dt-date end_date dt-input"
                        name="value_from_end_date"
                        data-column="5"
                        data-column-index="4"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <label>Salary:</label>
                    <input
                      type="text"
                      class="form-control dt-input"
                      data-column="6"
                      placeholder="10000"
                      data-column-index="5"
                    />
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <hr class="my-0" />
        <div class="card-datatable">
          <table class="dt-advanced-search table">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Advanced Search -->

<!-- Responsive Datatable -->
<section id="responsive-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header border-bottom">
          <h4 class="card-title">Responsive Datatable</h4>
        </div>
        <div class="card-datatable">
          <table class="dt-responsive table">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Status</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Post</th>
                <th>City</th>
                <th>Date</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Experience</th>
                <th>Status</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Responsive Datatable -->
@endsection


@section('vendor-script')
{{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/tables/table-datatables-advanced.js')) }}"></script>
@endsection
