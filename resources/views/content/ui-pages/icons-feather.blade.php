@extends('layouts/contentLayoutMaster')

@section('title', 'Feather Icons')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('vendors/css/extensions/toastr.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" href="{{asset('css/base/plugins/extensions/ext-component-toastr.css')}}">
<link rel="stylesheet" href="{{asset('css/base/pages/ui-feather.css')}}">
@endsection

@section('content')
<!-- Feather icons section start -->
<section id="feather-icons">
  <div class="row">
    <div class="col-12">
      <div class="icon-search-wrapper my-3 mx-auto">
        <div class="form-group input-group input-group-merge">
          <div class="input-group-prepend">
            <span class="input-group-text"><i data-feather="search"></i></span>
          </div>
          <input type="text" class="form-control" id="icons-search" placeholder="Search Icons..." />
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex flex-wrap" id="icons-container"></div>
</section>
<!-- Feather icon-s section end -->
</section>
@endsection

@section('vendor-script')
<script src="{{asset('vendors/js/extensions/toastr.min.js')}}"></script>
@endsection
@section('page-script')
<script src="{{asset('js/scripts/ui/ui-feather.js')}}"></script>
@endsection
