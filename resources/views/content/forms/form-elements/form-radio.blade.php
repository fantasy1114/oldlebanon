@extends('layouts/contentLayoutMaster')

@section('title', 'Radio')

@section('content')
<!-- Basic Radio Button start -->
<section class="basic-radio">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Radio Buttons</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio1"
                value="option1"
                checked
              />
              <label class="form-check-label" for="inlineRadio1">Checked</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio2"
                value="option2"
              />
              <label class="form-check-label" for="inlineRadio2">Unchecked</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioDisabledOptions"
                id="inlineRadio3"
                value="option3"
                checked
                disabled
              />
              <label class="form-check-label" for="inlineRadio3">Checked disabled</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioDisabledOptions"
                id="inlineRadio4"
                value="option4"
                disabled
              />
              <label class="form-check-label" for="inlineRadio4">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Radio Button end -->

<!-- Custom Radio Buttons start -->
<section class="custom-radio">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Custom Radio Buttons</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Add <code>.custom-control .custom-radio</code> as a single wrapper &amp; add
            <code>.custom-control-label</code> for better output.
          </p>
          <div class="demo-inline-spacing">
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked />
              <label class="custom-control-label" for="customRadio1">Checked</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" />
              <label class="custom-control-label" for="customRadio2">Unchecked</label>
            </div>
            <div class="custom-control custom-radio">
              <input
                type="radio"
                id="customRadio3"
                name="customDisabledRadio"
                class="custom-control-input"
                checked
                disabled
              />
              <label class="custom-control-label" for="customRadio3">Checked disabled</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio4" name="customDisabledRadio" class="custom-control-input" disabled />
              <label class="custom-control-label" for="customRadio4">Unchecked disabled</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Custom Radio Buttons end -->

<!-- Vuexy Radio Buttons Color start -->
<section class="vuexy-radio-color">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Color</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            To change the color of the radio use the <code>.custom-control-{value}</code> for primary, secondary,
            success, danger, info, warning.
          </p>
          <div class="demo-inline-spacing">
            <div class="custom-control custom-control-primary custom-radio">
              <input
                type="radio"
                id="customColorRadio1"
                name="customColorRadio1"
                class="custom-control-input"
                checked
              />
              <label class="custom-control-label" for="customColorRadio1">Primary</label>
            </div>
            <div class="custom-control custom-control-secondary custom-radio">
              <input
                type="radio"
                id="customColorRadio2"
                name="customColorRadio2"
                class="custom-control-input"
                checked
              />
              <label class="custom-control-label" for="customColorRadio2">Secondary</label>
            </div>
            <div class="custom-control custom-control-success custom-radio">
              <input
                type="radio"
                id="customColorRadio3"
                name="customColorRadio3"
                class="custom-control-input"
                checked
              />
              <label class="custom-control-label" for="customColorRadio3">Success</label>
            </div>
            <div class="custom-control custom-control-danger custom-radio">
              <input
                type="radio"
                id="customColorRadio5"
                name="customColorRadio5"
                class="custom-control-input"
                checked
              />
              <label class="custom-control-label" for="customColorRadio5">Danger</label>
            </div>
            <div class="custom-control custom-control-warning custom-radio">
              <input
                type="radio"
                id="customColorRadio4"
                name="customColorRadio4"
                class="custom-control-input"
                checked
              />
              <label class="custom-control-label" for="customColorRadio4">Warning</label>
            </div>
            <div class="custom-control custom-control-info custom-radio">
              <input type="radio" id="customRadio6" name="customColorRadio6" class="custom-control-input" checked />
              <label class="custom-control-label" for="customRadio6">Info</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vuexy Radio Buttons Color end -->
@endsection
