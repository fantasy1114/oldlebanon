@extends('layouts/contentLayoutMaster')

@section('title', 'Form Layouts')

@section('content')
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Horizontal Form</h4>
        </div>
        <div class="card-body">
          <form class="form form-horizontal">
            <div class="row">
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="first-name">First Name</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="text" id="first-name" class="form-control" name="fname" placeholder="First Name" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="email-id">Email</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="contact-info">Mobile</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile" />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="password">Password</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password" />
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="reset" class="btn btn-primary mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Horizontal Form with Icons</h4>
        </div>
        <div class="card-body">
          <form class="form form-horizontal">
            <div class="row">
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="fname-icon">First Name</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i data-feather="user"></i></span>
                      </div>
                      <input
                        type="text"
                        id="fname-icon"
                        class="form-control"
                        name="fname-icon"
                        placeholder="First Name"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="email-icon">Email</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i data-feather="mail"></i></span>
                      </div>
                      <input
                        type="email"
                        id="email-icon"
                        class="form-control"
                        name="email-id-icon"
                        placeholder="Email"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="contact-icon">Mobile</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i data-feather="smartphone"></i></span>
                      </div>
                      <input
                        type="number"
                        id="contact-icon"
                        class="form-control"
                        name="contact-icon"
                        placeholder="Mobile"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group row">
                  <div class="col-sm-3 col-form-label">
                    <label for="pass-icon">Password</label>
                  </div>
                  <div class="col-sm-9">
                    <div class="input-group input-group-merge">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i data-feather="lock"></i></span>
                      </div>
                      <input
                        type="password"
                        id="pass-icon"
                        class="form-control"
                        name="contact-icon"
                        placeholder="Password"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" />
                    <label class="custom-control-label" for="customCheck2">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="reset" class="btn btn-primary mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->
<section id="basic-vertical-layouts">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vertical Form</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="first-name-vertical">First Name</label>
                  <input
                    type="text"
                    id="first-name-vertical"
                    class="form-control"
                    name="fname"
                    placeholder="First Name"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="email-id-vertical">Email</label>
                  <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Email" />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="contact-info-vertical">Mobile</label>
                  <input
                    type="number"
                    id="contact-info-vertical"
                    class="form-control"
                    name="contact"
                    placeholder="Mobile"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="password-vertical">Password</label>
                  <input
                    type="password"
                    id="password-vertical"
                    class="form-control"
                    name="contact"
                    placeholder="Password"
                  />
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" />
                    <label class="custom-control-label" for="customCheck3">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button type="reset" class="btn btn-primary mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vertical Form with Icons</h4>
        </div>
        <div class="card-body">
          <form class="form form-vertical">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label for="first-name-icon">First Name</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i data-feather="user"></i></span>
                    </div>
                    <input
                      type="text"
                      id="first-name-icon"
                      class="form-control"
                      name="fname-icon"
                      placeholder="First Name"
                    />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="email-id-icon">Email</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i data-feather="mail"></i></span>
                    </div>
                    <input
                      type="email"
                      id="email-id-icon"
                      class="form-control"
                      name="email-id-icon"
                      placeholder="Email"
                    />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="contact-info-icon">Mobile</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i data-feather="smartphone"></i></span>
                    </div>
                    <input
                      type="number"
                      id="contact-info-icon"
                      class="form-control"
                      name="contact-icon"
                      placeholder="Mobile"
                    />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="password-icon">Password</label>
                  <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i data-feather="lock"></i></span>
                    </div>
                    <input
                      type="password"
                      id="password-icon"
                      class="form-control"
                      name="contact-icon"
                      placeholder="Password"
                    />
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4" />
                    <label class="custom-control-label" for="customCheck4">Remember me</label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button type="reset" class="btn btn-primary mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Vertical form layout section end -->

<!-- Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Multiple Column</h4>
        </div>
        <div class="card-body">
          <form class="form">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="first-name-column">First Name</label>
                  <input
                    type="text"
                    id="first-name-column"
                    class="form-control"
                    placeholder="First Name"
                    name="fname-column"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="last-name-column">Last Name</label>
                  <input
                    type="text"
                    id="last-name-column"
                    class="form-control"
                    placeholder="Last Name"
                    name="lname-column"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="city-column">City</label>
                  <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column" />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="country-floating">Country</label>
                  <input
                    type="text"
                    id="country-floating"
                    class="form-control"
                    name="country-floating"
                    placeholder="Country"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="company-column">Company</label>
                  <input
                    type="text"
                    id="company-column"
                    class="form-control"
                    name="company-column"
                    placeholder="Company"
                  />
                </div>
              </div>
              <div class="col-md-6 col-12">
                <div class="form-group">
                  <label for="email-id-column">Email</label>
                  <input
                    type="email"
                    id="email-id-column"
                    class="form-control"
                    name="email-id-column"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="reset" class="btn btn-primary mr-1">Submit</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Floating Label Form section end -->
@endsection
