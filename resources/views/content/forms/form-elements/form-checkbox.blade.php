
@extends('layouts/contentLayoutMaster')

@section('title', 'Checkbox')

@section('content')
<!-- Basic Checkbox start -->
<section class="basic-checkbox">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Checkboxes</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="checked" checked />
              <label class="form-check-label" for="inlineCheckbox1">Checked</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="unchecked" />
              <label class="form-check-label" for="inlineCheckbox2">Unchecked</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="checkbox"
                id="inlineCheckbox3"
                value="checked-disabled"
                checked
                disabled
              />
              <label class="form-check-label" for="inlineCheckbox3">Checked disabled</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="checkbox"
                id="inlineCheckbox4"
                value="unchecked-disabled"
                disabled
              />
              <label class="form-check-label" for="inlineCheckbox4">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Checkbox end -->

<!-- Custom Checkbox start -->
<section class="custom-checkbox">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Custom Checkboxes</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Add <code>.custom-control .custom-checkbox</code> as a single wrapper &amp; add
            <code>.custom-control-label</code> for better output.
          </p>
          <div class="demo-inline-spacing">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck1" checked />
              <label class="custom-control-label" for="customCheck1">Checked</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck2" />
              <label class="custom-control-label" for="customCheck2">Unchecked</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck3" checked disabled />
              <label class="custom-control-label" for="customCheck3">Checked disabled</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="customCheck4" disabled />
              <label class="custom-control-label" for="customCheck4">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Custom Checkbox end -->

<!-- Checkbox Color start -->
<section class="vuexy-checkbox-color">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            To change the color of the checkBox use the <code>.custom-control-{value}</code> for primary, secondary,
            success, danger, info, warning.
          </p>
          <div class="demo-inline-spacing">
            <div class="custom-control custom-control-primary custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck1" checked />
              <label class="custom-control-label" for="colorCheck1">Primary</label>
            </div>
            <div class="custom-control custom-control-secondary custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck2" checked />
              <label class="custom-control-label" for="colorCheck2">Secondary</label>
            </div>
            <div class="custom-control custom-control-success custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck3" checked />
              <label class="custom-control-label" for="colorCheck3">Success</label>
            </div>
            <div class="custom-control custom-control-danger custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck5" checked />
              <label class="custom-control-label" for="colorCheck5">Danger</label>
            </div>
            <div class="custom-control custom-control-warning custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck4" checked />
              <label class="custom-control-label" for="colorCheck4">Warning</label>
            </div>
            <div class="custom-control custom-control-info custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck6" checked />
              <label class="custom-control-label" for="colorCheck6">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
