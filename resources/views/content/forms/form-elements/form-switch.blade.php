
@extends('layouts/contentLayoutMaster')

@section('title', 'Switch')

@section('content')
<!-- Basic Switches Starts -->
<section id="basic-switches">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Switch</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">use class <code>.switch-label</code> to add a label to switch.</p>
          <div class="demo-inline-spacing">
            <div class="custom-control custom-switch custom-control-inline">
              <input type="checkbox" class="custom-control-input" id="customSwitch1" />
              <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
            </div>
            <div class="custom-control custom-switch custom-control-inline">
              <input type="checkbox" class="custom-control-input" disabled id="customSwitch2" />
              <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Switches Ends -->

<!-- Switch Colors Starts -->
<section id="switch-colors">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Colors</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Use class <code>.custom-control-#{$color-name}</code> with <code>.custom-switch</code> to change switch's
            color
          </p>
          <!-- <div class="d-flex justify-content-start flex-wrap"> -->
          <div class="demo-inline-spacing">
            <div class="custom-control custom-control-primary custom-switch">
              <p class="mb-50">Primary</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch3" />
              <label class="custom-control-label" for="customSwitch3"></label>
            </div>
            <div class="custom-control custom-control-secondary custom-switch">
              <p class="mb-50">Secondary</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch44" />
              <label class="custom-control-label" for="customSwitch44"></label>
            </div>
            <div class="custom-control custom-control-success custom-switch">
              <p class="mb-50">Success</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch4" />
              <label class="custom-control-label" for="customSwitch4"></label>
            </div>
            <div class="custom-control custom-control-danger custom-switch">
              <p class="mb-50">Danger</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch5" />
              <label class="custom-control-label" for="customSwitch5"></label>
            </div>
            <div class="custom-control custom-control-warning custom-switch">
              <p class="mb-50">Warning</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch7" />
              <label class="custom-control-label" for="customSwitch7"></label>
            </div>

            <div class="custom-control custom-control-info custom-switch">
              <p class="mb-50">Info</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch6" />
              <label class="custom-control-label" for="customSwitch6"></label>
            </div>
            <div class="custom-control custom-control-dark custom-switch">
              <p class="mb-50">Dark</p>
              <input type="checkbox" checked class="custom-control-input" id="customSwitch8" />
              <label class="custom-control-label" for="customSwitch8"></label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Colors Ends -->

<!-- Switch Icons Starts -->
<section id="switch-icons">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Icons</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Use class <code>.switch-icon-left & .switch-icon-right</code> inside of
            <code>.custom-control-label</code> to create a switch with icon.
          </p>
          <!-- <div class="d-flex justify-content-start flex-wrap"> -->
          <div class="demo-inline-spacing">
            <div class="custom-control custom-switch custom-switch-primary">
              <p class="mb-50">Primary</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch10" checked />
              <label class="custom-control-label" for="customSwitch10">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch custom-switch-secondary">
              <p class="mb-50">Secondary</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch11" checked />
              <label class="custom-control-label" for="customSwitch11">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch custom-switch-success">
              <p class="mb-50">Success</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch111" checked />
              <label class="custom-control-label" for="customSwitch111">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch custom-switch-danger">
              <p class="mb-50">Danger</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch12" checked />
              <label class="custom-control-label" for="customSwitch12">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch custom-switch-warning">
              <p class="mb-50">Warning</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch14" checked />
              <label class="custom-control-label" for="customSwitch14">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch custom-switch-info">
              <p class="mb-50">Info</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch13" checked />
              <label class="custom-control-label" for="customSwitch13">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
            <div class="custom-control custom-switch custom-switch-dark">
              <p class="mb-50">Dark</p>
              <input type="checkbox" class="custom-control-input" id="customSwitch15" checked />
              <label class="custom-control-label" for="customSwitch15">
                <span class="switch-icon-left"><i data-feather="check"></i></span>
                <span class="switch-icon-right"><i data-feather="x"></i></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Switch Icons Ends -->
@endsection
