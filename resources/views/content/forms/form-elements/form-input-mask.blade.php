@extends('layouts/contentLayoutMaster')

@section('title', 'Input Mask')

@section('content')
<!-- Input Mask start -->
<section id="input-mask-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Input Mask</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="credit-card">Credit Card</label>
              <input
                type="text"
                class="form-control credit-card-mask"
                placeholder="0000 0000 0000 0000"
                id="credit-card"
              />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="phone-number">Phone Number</label>
              <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text">US (+1)</span>
                </div>
                <input
                  type="text"
                  class="form-control phone-number-mask"
                  placeholder="1 234 567 8900"
                  id="phone-number"
                />
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="date">Date</label>
              <input type="text" class="form-control date-mask" placeholder="YYYY-MM-DD" id="date" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="time">Time</label>
              <input type="text" class="form-control time-mask" placeholder="hh:mm:ss" id="time" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="numeral-formatting">Numeral formatting</label>
              <input type="text" class="form-control numeral-mask" placeholder="10,000" id="numeral-formatting" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="blocks">Blocks</label>
              <input type="text" class="form-control block-mask" placeholder="Blocks [4, 3, 3]" id="blocks" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="delimiters">Delimiters</label>
              <input type="text" class="form-control delimiter-mask" placeholder="Delimiter: '.'" id="delimiters" />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="custom-delimiters">Custom Delimiters</label>
              <input
                type="text"
                class="form-control custom-delimiter-mask"
                placeholder="Delimiter: ['.', '.', '-']"
                id="custom-delimiters"
              />
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
              <label for="prefix">Prefix</label>
              <input type="text" class="form-control prefix-mask" id="prefix" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Input Mask End -->
@endsection

@section('vendor-script')
  {{-- vendor files --}}
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection


@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/forms/form-input-mask.js')) }}"></script>
@endsection
