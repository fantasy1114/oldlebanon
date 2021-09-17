
@extends('layouts/contentLayoutMaster')

@section('title', 'Date & Time Picker')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
@endsection

@section('content')
<!-- Flatpickr Starts -->
<section id="flatpickr">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Flatpickr</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6 form-group">
          <label for="fp-default">Default</label>
          <input type="text" id="fp-default" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
        </div>
        <div class="col-md-6 form-group">
          <label for="fp-time">Time picker</label>
          <input type="text" id="fp-time" class="form-control flatpickr-time text-left" placeholder="HH:MM" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group">
          <label for="fp-date-time">Date & TIme</label>
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            placeholder="YYYY-MM-DD HH:MM"
          />
        </div>
        <div class="col-md-6 form-group">
          <label for="fp-multiple">Multiple Dates</label>
          <input type="text" id="fp-multiple" class="form-control flatpickr-multiple" placeholder="YYYY-MM-DD" />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group">
          <label for="fp-range">Range</label>
          <input
            type="text"
            id="fp-range"
            class="form-control flatpickr-range"
            placeholder="YYYY-MM-DD to YYYY-MM-DD"
          />
        </div>
        <div class="col-md-6 form-group">
          <label for="fp-human-friendly">Human Friendly</label>
          <input
            type="text"
            id="fp-human-friendly"
            class="form-control flatpickr-human-friendly"
            placeholder="October 14, 2020"
          />
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group">
          <label>Disabled Range</label>
          <input type="text" class="form-control flatpickr-disabled-range" placeholder="YYYY-MM-DD" />
        </div>
        <div class="col-md-6 form-group">
          <label>Inline</label>
          <input type="text" class="form-control flatpickr-inline" placeholder="YYYY-MM-DD" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Flatpickr Ends-->

<!-- Pick-A-Date Picker start -->
<section id="pick-a-date">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Pick a date</h4>
    </div>
    <div class="card-body">
      <p class="card-text">
        The basic setup requires targetting an <code>input</code> element and invoking the picker.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pd-default">Default</label>
          <input type="text" id="pd-default" class="form-control pickadate" placeholder="18 June, 2020" />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pd-format">Format Date Picker</label>
          <input type="text" id="pd-format" class="form-control format-picker" placeholder="18 June, 2020" />
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pd-minmax">Min-Max Date Range</label>
          <input type="text" id="pd-minmax" class="form-control pickadate-limits" placeholder="18 June, 2020" />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pd-minmax">Translation</label>
          <input type="text" class="form-control pickadate-translations" placeholder="18 June, 2020" />
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pd-short-string">Pick-a-date with short string</label>
          <input
            type="text"
            id="pd-short-string"
            class="form-control pickadate-short-string"
            placeholder="18 June, 2020"
          />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pd-firstday">Change First Weekday</label>
          <input type="text" id="pd-firstday" class="form-control pickadate-firstday" placeholder="18 June, 2020" />
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pd-months-year">Select Month & Year</label>
          <input
            type="text"
            id="pd-months-year"
            class="form-control pickadate-months-year"
            placeholder="18 June, 2020"
          />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pd-disable">Disabled Dates & Weeks</label>
          <input type="text" id="pd-disable" class="form-control pickadate-disable" placeholder="18 June, 2020" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pick-A-Date Picker end -->

<!-- Pick-A-Time Picker start -->
<section id="pick-a-time">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Pick a time</h4>
    </div>
    <div class="card-body">
      <p class="card-text">The mobile-friendly, responsive, and lightweight jQuery time input picker.</p>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pt-default">Default</label>
          <input type="text" id="pt-default" class="form-control pickatime" placeholder="8:00 AM" />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pt-format">Change Formats</label>
          <input
            type="text"
            id="pt-format"
            class="form-control pickatime-format"
            placeholder="Time selected: 12.30 a.m."
          />
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pt-formatlabel">Format with Label</label>
          <input type="text" id="pt-formatlabel" class="form-control pickatime-formatlabel" placeholder="8:00 AM" />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pt-intervals">Intervals</label>
          <input type="text" id="pt-intervals" class="form-control pickatime-intervals" placeholder="8:00 AM" />
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-md-6 form-group">
          <label for="pt-disable">Disable set of Time</label>
          <input type="text" id="pt-disable" class="form-control pickatime-disable" placeholder="8:00 AM" />
        </div>
        <div class="col-12 col-md-6 form-group">
          <label for="pt-min-max">Minimum and maximum time range</label>
          <input type="text" id="pt-min-max" class="form-control pickatime-min-max" placeholder="8:00 AM" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pick-A-Time Picker end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
@endsection
