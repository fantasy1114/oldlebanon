
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Repeater')

@section('content')
<section class="form-control-repeater">
  <div class="row">
    <!-- Invoice repeater -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Invoice</h4>
        </div>
        <div class="card-body">
          <form action="#" class="invoice-repeater">
            <div data-repeater-list="invoice">
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                  <div class="col-md-4 col-12">
                    <div class="form-group">
                      <label for="itemname">Item Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemname"
                        aria-describedby="itemname"
                        placeholder="Vuexy Admin Template"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="form-group">
                      <label for="itemcost">Cost</label>
                      <input
                        type="number"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="32"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="form-group">
                      <label for="itemquantity">Quantity</label>
                      <input
                        type="number"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="1"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="form-group">
                      <label for="staticprice">Price</label>
                      <input type="text" readonly class="form-control-plaintext" id="staticprice" value="$32" />
                    </div>
                  </div>

                  <div class="col-md-2 col-12 mb-50">
                    <div class="form-group">
                      <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                        <i data-feather="x" class="mr-25"></i>
                        <span>Delete</span>
                      </button>
                    </div>
                  </div>
                </div>
                <hr />
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                  <i data-feather="plus" class="mr-25"></i>
                  <span>Add New</span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Invoice repeater -->
  </div>
</section>
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/repeater/jquery.repeater.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-repeater.js')) }}"></script>
@endsection
