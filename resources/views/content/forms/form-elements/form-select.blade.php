
@extends('layouts/contentLayoutMaster')

@section('title', 'Select')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('content')
<!-- Bootstrap Select start -->
<section class="bootstrap-select">
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bootstrap Select</h4>
        </div>
        <div class="card-body">
          <!-- Basic Select -->
          <div class="form-group">
            <label for="basicSelect">Basic Select</label>
            <select class="form-control" id="basicSelect">
              <option>IT</option>
              <option>Blade Runner</option>
              <option>Thor Ragnarok</option>
            </select>
          </div>

          <!-- Custom Select -->
          <div class="form-group">
            <label for="customSelect">Custom Select</label>
            <select class="custom-select" id="customSelect">
              <option selected>Open this menu</option>
              <option value="IT">IT</option>
              <option value="Blade Runner">Blade Runner</option>
              <option value="Thor Ragnarok">Thor Ragnarok</option>
            </select>
          </div>

          <!-- Disabled Select -->
          <div class="form-group">
            <label for="disabledSelect">Disabled Select</label>
            <select class="form-control" disabled="disabled" id="disabledSelect">
              <option>Green</option>
              <option>Red</option>
              <option>Blue</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bootstrap Select Sizing</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="selectLarge">Select Large</label>
            <select class="form-control form-control-lg mb-1" id="selectLarge">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="form-group">
            <label for="selectDefault">Default</label>
            <select class="form-control mb-1" id="selectDefault">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="form-group">
            <label for="selectSmall">Select Small</label>
            <select class="form-control form-control-sm" id="selectSmall">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Bootstrap Multi Select</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <!-- Multiple Select -->
            <div class="col-md-4 col-12">
              <div class="form-group">
                <label for="normalMultiSelect">Multiple Select</label>
                <select class="form-control" id="normalMultiSelect" multiple="multiple">
                  <option selected="selected">Square</option>
                  <option>Rectangle</option>
                  <option selected="selected">Rombo</option>
                  <option>Romboid</option>
                  <option>Trapeze</option>
                  <option>Triangle</option>
                  <option selected="selected">Polygon</option>
                  <option>Regular polygon</option>
                  <option>Circumference</option>
                  <option>Circle</option>
                </select>
              </div>
            </div>

            <div class="col-md-4 col-12">
              <div class="form-group">
                <label for="customSelectMulti">Custom Multiple Select</label>
                <select class="custom-select" id="customSelectMulti" multiple>
                  <option selected="selected">Square</option>
                  <option>Rectangle</option>
                  <option selected="selected">Rombo</option>
                  <option>Romboid</option>
                  <option>Trapeze</option>
                  <option>Triangle</option>
                  <option selected="selected">Polygon</option>
                  <option>Regular polygon</option>
                  <option>Circumference</option>
                  <option>Circle</option>
                </select>
              </div>
            </div>

            <div class="col-md-4 col-12">
              <div class="form-group">
                <label for="customSelectSize">Custom Select Size</label>
                <select class="custom-select" id="customSelectSize" size="4">
                  <option>Square</option>
                  <option>Rectangle</option>
                  <option selected="selected">Rombo</option>
                  <option>Romboid</option>
                  <option>Trapeze</option>
                  <option>Triangle</option>
                  <option>Polygon</option>
                  <option>Regular polygon</option>
                  <option>Circumference</option>
                  <option>Circle</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Bootstrap Select end -->

<!-- Select2 Start  -->
<section class="basic-select2">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Select2 Options</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <!-- Basic -->
            <div class="col-md-6 mb-1">
              <label>Basic</label>
              <select class="select2 form-control form-control-lg">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA">Washington</option>
                <option value="AZ">Arizona</option>
                <option value="CO">Colorado</option>
                <option value="ID">Idaho</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NM">New Mexico</option>
                <option value="ND">North Dakota</option>
                <option value="UT">Utah</option>
                <option value="WY">Wyoming</option>
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="IL">Illinois</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="OK">Oklahoma</option>
                <option value="SD">South Dakota</option>
                <option value="TX">Texas</option>
                <option value="TN">Tennessee</option>
                <option value="WI">Wisconsin</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="IN">Indiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
              </select>
            </div>

            <!-- Nested -->
            <div class="col-md-6 mb-1">
              <label>Nested</label>
              <select class="select2 form-control">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                  <option value="CA">California</option>
                  <option value="NV">Nevada</option>
                  <option value="OR">Oregon</option>
                  <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                  <option value="AZ">Arizona</option>
                  <option value="CO">Colorado</option>
                  <option value="ID">Idaho</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NM">New Mexico</option>
                  <option value="ND">North Dakota</option>
                  <option value="UT">Utah</option>
                  <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="IL">Illinois</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="OK">Oklahoma</option>
                  <option value="SD">South Dakota</option>
                  <option value="TX">Texas</option>
                  <option value="TN">Tennessee</option>
                  <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL" selected>Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="IN">Indiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="OH">Ohio</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WV">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <!-- Multiple -->
            <div class="col-md-6 mb-1">
              <label>Multiple</label>
              <select class="select2 form-control" multiple>
                <optgroup label="Alaskan/Hawaiian Time Zone">
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                  <option value="CA">California</option>
                  <option value="NV">Nevada</option>
                  <option value="OR">Oregon</option>
                  <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                  <option value="AZ">Arizona</option>
                  <option value="CO" selected>Colorado</option>
                  <option value="ID">Idaho</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NM">New Mexico</option>
                  <option value="ND">North Dakota</option>
                  <option value="UT">Utah</option>
                  <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="IL">Illinois</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="OK">Oklahoma</option>
                  <option value="SD">South Dakota</option>
                  <option value="TX">Texas</option>
                  <option value="TN">Tennessee</option>
                  <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL" selected>Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="IN">Indiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="OH">Ohio</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WV">West Virginia</option>
                </optgroup>
              </select>
            </div>

            <!-- Icons -->
            <div class="col-md-6 mb-1">
              <label>Icons</label>
              <select data-placeholder="Select a state..." class="select2-icons form-control" id="select2-icons">
                <optgroup label="Social Media">
                  <option value="facebook" data-icon="facebook" selected>Facebook</option>
                  <option value="twitter" data-icon="twitter">Twitter</option>
                  <option value="linkedin" data-icon="linkedin">LinkedIN</option>
                  <option value="github" data-icon="github">GitHub</option>
                  <option value="instagram" data-icon="instagram">Instagram</option>
                  <option value="dribbble" data-icon="dribbble">Dribbble</option>
                  <option value="gitlab" data-icon="gitlab">GitLab</option>
                </optgroup>
                <optgroup label="File types">
                  <option value="pdf" data-icon="file">PDF</option>
                  <option value="word" data-icon="file-text">Word</option>
                  <option value="image" data-icon="image">Image</option>
                </optgroup>
                <optgroup label="Other">
                  <option value="figma" data-icon="figma">Figma</option>
                  <option value="chrome" data-icon="chrome">Chrome</option>
                  <option value="safari" data-icon="command">Safari</option>
                  <option value="slack" data-icon="slack">Slack</option>
                  <option value="youtube" data-icon="youtube">YouTube</option>
                </optgroup>
              </select>
            </div>

            <!-- Disabled -->
            <div class="col-md-6 mb-1">
              <label>Disabled</label>
              <select class="select2 form-control" disabled>
                <option value="1">Option</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>

            <!-- Disabled Results -->
            <div class="col-md-6 mb-1">
              <label>Disabled Results</label>
              <select class="select2 form-control">
                <option value="1">Option</option>
                <option value="2" disabled>Option2</option>
                <option value="3">Option3</option>
                <option value="4" disabled>Option4</option>
              </select>
            </div>

            <!-- Array Data -->
            <div class="col-md-6 mb-1">
              <label>Array Data</label>
              <div class="form-group">
                <select class="select2-data-array form-control" id="select2-array"></select>
              </div>
            </div>

            <!-- Remote Data -->
            <div class="col-md-6 mb-1">
              <label>Remote Data</label>
              <div class="form-group">
                <select class="select2-data-ajax form-control" id="select2-ajax"></select>
              </div>
            </div>

            <!-- Limit Selected Options -->
            <div class="col-md-6 mb-1">
              <label>Limit Selected Options</label>
              <select class="max-length form-control" multiple>
                <optgroup label="Figures">
                  <option value="romboid">Romboid</option>
                  <option value="trapeze" selected>Trapeze</option>
                  <option value="triangle">Triangle</option>
                  <option value="polygon">Polygon</option>
                </optgroup>
                <optgroup label="Colors">
                  <option value="red">Red</option>
                  <option value="green">Green</option>
                  <option value="blue">Blue</option>
                  <option value="purple">Purple</option>
                </optgroup>
              </select>
            </div>

            <!-- Hide Search Box -->
            <div class="col-md-6 mb-2">
              <label>Hide Search Box</label>
              <select class="hide-search form-control">
                <optgroup label="Figures">
                  <option value="romboid">Romboid</option>
                  <option value="trapeze" selected>Trapeze</option>
                  <option value="triangle">Triangle</option>
                  <option value="polygon">Polygon</option>
                </optgroup>
                <optgroup label="Colors">
                  <option value="red">Red</option>
                  <option value="green">Green</option>
                  <option value="blue">Blue</option>
                  <option value="purple">Purple</option>
                </optgroup>
              </select>
            </div>

            <!-- Modal Demo -->
            <div class="col-md-6">
              <!-- Basic trigger modal -->
              <div class="basic-modal">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#select2InModal">
                  Select2 In Modal
                </button>

                <!-- Modal -->
                <div
                  class="modal fade text-left"
                  id="select2InModal"
                  tabindex="-1"
                  role="dialog"
                  aria-labelledby="myModalLabel1"
                  aria-hidden="true"
                >
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel1">Select2 In Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>This is Select2 Example in Modal.</p>

                        <label for="select2Demo">Select2</label>
                        <select class="select2InModal form-control form-control-lg" id="select2Demo">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                          <option value="AZ">Arizona</option>
                          <option value="CO">Colorado</option>
                          <option value="ID">Idaho</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NM">New Mexico</option>
                          <option value="ND">North Dakota</option>
                          <option value="UT">Utah</option>
                          <option value="WY">Wyoming</option>
                          <option value="AL">Alabama</option>
                          <option value="AR">Arkansas</option>
                          <option value="IL">Illinois</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="OK">Oklahoma</option>
                          <option value="SD">South Dakota</option>
                          <option value="TX">Texas</option>
                          <option value="TN">Tennessee</option>
                          <option value="WI">Wisconsin</option>
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="IN">Indiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="OH">Ohio</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WV">West Virginia</option>
                        </select>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Basic trigger modal end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sizing Options -->
  <div class="row">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Select2 Size Options</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <p class="card-text">
                For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp;
                <code>.select2-size-lg</code> for Small &amp; Large &amp; Multi Selects respectively.
              </p>
            </div>
            <div class="col-12">
              <label>Large</label>
              <div class="form-group">
                <select class="select2-size-lg form-control" id="large-select">
                  <option value="square">Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="rombo">Rombo</option>
                  <option value="romboid">Romboid</option>
                  <option value="trapeze">Trapeze</option>
                  <option value="traible">Triangle</option>
                  <option value="polygon">Polygon</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label>Default</label>
              <div class="form-group">
                <select class="select2 form-control" id="default-select">
                  <option value="square">Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="rombo">Rombo</option>
                  <option value="romboid">Romboid</option>
                  <option value="trapeze">Trapeze</option>
                  <option value="traible">Triangle</option>
                  <option value="polygon">Polygon</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label>Small</label>
              <div class="form-group">
                <select class="select2-size-sm form-control" id="small-select">
                  <option value="square">Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="rombo">Rombo</option>
                  <option value="romboid">Romboid</option>
                  <option value="trapeze">Trapeze</option>
                  <option value="traible">Triangle</option>
                  <option value="polygon">Polygon</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Select2 Multi Select Size Options</h4>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <p class="card-text">
                For different sizes of select2, Use classes like <code>.select2-size-sm</code> &amp;
                <code>.select2-size-lg</code> for Small &amp; Large &amp; Selects respectively.
              </p>
            </div>
            <div class="col-12">
              <label>Large</label>
              <div class="form-group">
                <select class="select2-size-lg form-control" multiple="multiple" id="large-select-multi">
                  <option value="square" selected>Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="rombo">Rombo</option>
                  <option value="romboid">Romboid</option>
                  <option value="trapeze">Trapeze</option>
                  <option value="traible">Triangle</option>
                  <option value="polygon">Polygon</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label>Default</label>
              <div class="form-group">
                <select class="select2 form-control" multiple="multiple" id="default-select-multi">
                  <option value="square">Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="rombo">Rombo</option>
                  <option value="romboid">Romboid</option>
                  <option value="trapeze">Trapeze</option>
                  <option value="traible">Triangle</option>
                  <option value="polygon" selected>Polygon</option>
                </select>
              </div>
            </div>
            <div class="col-12">
              <label>Small</label>
              <div class="form-group">
                <select class="select2-size-sm form-control" multiple="multiple" id="small-select-multi">
                  <option value="square">Square</option>
                  <option value="rectangle">Rectangle</option>
                  <option value="rombo" selected>Rombo</option>
                  <option value="romboid">Romboid</option>
                  <option value="trapeze">Trapeze</option>
                  <option value="traible">Triangle</option>
                  <option value="polygon">Polygon</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Select2 End -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>
@endsection
