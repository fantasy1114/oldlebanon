
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Validation')

@section('vendor-style')
  {{-- Vendor Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
@endsection

@section('content')
<!-- Validation -->
<section class="bs-validation">
  <div class="row">
    <!-- Bootstrap Validation -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bootstrap Validation</h4>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate>
            <div class="form-group">
              <label class="form-label" for="basic-addon-name">Name</label>

              <input
                type="text"
                id="basic-addon-name"
                class="form-control"
                placeholder="Name"
                aria-label="Name"
                aria-describedby="basic-addon-name"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your name.</div>
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-default-email1">Email</label>
              <input
                type="email"
                id="basic-default-email1"
                class="form-control"
                placeholder="john.doe@email.com"
                aria-label="john.doe@email.com"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter a valid email</div>
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-default-password1">Password</label>
              <input
                type="password"
                id="basic-default-password1"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                required
              />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please enter your password.</div>
            </div>
            <div class="form-group">
              <label for="select-country1">Country</label>
              <select class="form-control" id="select-country1" required>
                <option value="">Select Country</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="france">France</option>
                <option value="australia">Australia</option>
                <option value="spain">Spain</option>
              </select>
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please select your country</div>
            </div>
            <div class="form-group">
              <label for="dob-bootstrap-val">DOB</label>
              <input type="text" class="form-control flatpickr-validation flatpickr" id="dob-bootstrap-val" required />
              <div class="valid-feedback">Looks good!</div>
              <div class="invalid-feedback">Please Enter Your DOB</div>
            </div>
            <div class="form-group">
              <label for="customFile1">Profile pic</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile1" required />
                <label class="custom-file-label" for="customFile1">Choose profile pic</label>
              </div>
            </div>
            <div class="form-group">
              <label class="d-block">Gender</label>
              <div class="custom-control custom-radio my-50">
                <input
                  type="radio"
                  id="validationRadio3"
                  name="validationRadioBootstrap"
                  class="custom-control-input"
                  required
                />
                <label class="custom-control-label" for="validationRadio3">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input
                  type="radio"
                  id="validationRadio4"
                  name="validationRadioBootstrap"
                  class="custom-control-input"
                  required
                />
                <label class="custom-control-label" for="validationRadio4">Female</label>
              </div>
            </div>
            <div class="form-group">
              <label class="d-block" for="validationBioBootstrap">Bio</label>
              <textarea
                class="form-control"
                id="validationBioBootstrap"
                name="validationBioBootstrap"
                rows="3"
                required
              ></textarea>
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="validationCheckBootstrap" required />
                <label class="custom-control-label" for="validationCheckBootstrap"
                  >Agree to our terms and conditions</label
                >
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Bootstrap Validation -->

    <!-- jQuery Validation -->
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">jQuery Validation</h4>
        </div>
        <div class="card-body">
          <form id="jquery-val-form" method="GET">
            <div class="form-group">
              <label class="form-label" for="basic-default-name">Name</label>
              <input
                type="text"
                class="form-control"
                id="basic-default-name"
                name="basic-default-name"
                placeholder="John Doe"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-default-email">Email</label>
              <input
                type="text"
                id="basic-default-email"
                name="basic-default-email"
                class="form-control"
                placeholder="john.doe@email.com"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-default-password">Password</label>
              <input
                type="password"
                id="basic-default-password"
                name="basic-default-password"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="confirm-password">Confirm Password</label>
              <input
                type="password"
                id="confirm-password"
                name="confirm-password"
                class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="dob">DOB</label>
              <input type="text" class="form-control" name="dob" id="dob" />
            </div>
            <div class="form-group">
              <label for="select-country">Country</label>
              <select class="form-control select2" id="select-country" name="select-country">
                <option value="">Select Country</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="france">France</option>
                <option value="australia">Australia</option>
                <option value="spain">Spain</option>
              </select>
            </div>
            <div class="form-group">
              <label>Profile pic</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="customFile" />
                <label class="custom-file-label" for="customFile">Choose profile pic</label>
              </div>
            </div>
            <div class="form-group">
              <label class="d-block">Gender</label>
              <div class="custom-control custom-radio my-50">
                <input type="radio" id="validationRadiojq1" name="validationRadiojq" class="custom-control-input" />
                <label class="custom-control-label" for="validationRadiojq1">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="validationRadiojq2" name="validationRadiojq" class="custom-control-input" />
                <label class="custom-control-label" for="validationRadiojq2">Female</label>
              </div>
            </div>
            <div class="form-group">
              <label class="d-block" for="validationBio">Bio</label>
              <textarea class="form-control" id="validationBio" name="validationBiojq" rows="3"></textarea>
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="validationCheck" name="validationCheck" />
                <label class="custom-control-label" for="validationCheck">Agree to our terms and conditions</label>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /jQuery Validation -->
  </div>
</section>
<!-- /Validation -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
@endsection
