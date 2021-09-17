@extends('layouts/contentLayoutMaster')

@section('title', 'User View')

@section('vendor-style')
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css'))}}">
<link rel="stylesheet" href="{{asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css'))}}">
@endsection
@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
@endsection

@section('content')
<section class="app-user-view">
  <!-- User Card & Plan Starts -->
  <div class="row">
    <!-- User Card starts-->
    <div class="col-xl-9 col-lg-8 col-md-7">
      <div class="card user-card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
              <div class="user-avatar-section">
                <div class="d-flex justify-content-start">
                  <img
                    class="img-fluid rounded"
                    src="{{asset('images/avatars/7.png')}}"
                    height="104"
                    width="104"
                    alt="User avatar"
                  />
                  <div class="d-flex flex-column ml-1">
                    <div class="user-info mb-1">
                      <h4 class="mb-0">Eleanor Aguilar</h4>
                      <span class="card-text">eleanor.aguilar@gmail.com</span>
                    </div>
                    <div class="d-flex flex-wrap">
                      <a href="{{url('app/user/edit')}}" class="btn btn-primary">Edit</a>
                      <button class="btn btn-outline-danger ml-1">Delete</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center user-total-numbers">
                <div class="d-flex align-items-center mr-2">
                  <div class="color-box bg-light-primary">
                    <i data-feather="dollar-sign" class="text-primary"></i>
                  </div>
                  <div class="ml-1">
                    <h5 class="mb-0">23.3k</h5>
                    <small>Monthly Sales</small>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="color-box bg-light-success">
                    <i data-feather="trending-up" class="text-success"></i>
                  </div>
                  <div class="ml-1">
                    <h5 class="mb-0">$99.87K</h5>
                    <small>Annual Profit</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
              <div class="user-info-wrapper">
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="user" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Username</span>
                  </div>
                  <p class="card-text mb-0">eleanor.aguilar</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="check" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Status</span>
                  </div>
                  <p class="card-text mb-0">Active</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="star" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Role</span>
                  </div>
                  <p class="card-text mb-0">Admin</p>
                </div>
                <div class="d-flex flex-wrap my-50">
                  <div class="user-info-title">
                    <i data-feather="flag" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Country</span>
                  </div>
                  <p class="card-text mb-0">England</p>
                </div>
                <div class="d-flex flex-wrap">
                  <div class="user-info-title">
                    <i data-feather="phone" class="mr-1"></i>
                    <span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
                  </div>
                  <p class="card-text mb-0">(123) 456-7890</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card Ends-->

    <!-- Plan Card starts-->
    <div class="col-xl-3 col-lg-4 col-md-5">
      <div class="card plan-card border-primary">
        <div class="card-header d-flex justify-content-between align-items-center pt-75 pb-1">
          <h5 class="mb-0">Current Plan</h5>
          <span class="badge badge-light-secondary" data-toggle="tooltip" data-placement="top" title="Expiry Date"
            >July 22, <span class="nextYear"></span>
          </span>
        </div>
        <div class="card-body">
          <div class="badge badge-light-primary">Basic</div>
          <ul class="list-unstyled my-1">
            <li>
              <span class="align-middle">5 Users</span>
            </li>
            <li class="my-25">
              <span class="align-middle">10 GB storage</span>
            </li>
            <li>
              <span class="align-middle">Basic Support</span>
            </li>
          </ul>
          <button class="btn btn-primary text-center btn-block">Upgrade Plan</button>
        </div>
      </div>
    </div>
    <!-- /Plan CardEnds -->
  </div>
  <!-- User Card & Plan Ends -->

  <!-- User Timeline & Permissions Starts -->
  <div class="row">
    <!-- information starts -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title mb-2">User Timeline</h4>
        </div>
        <div class="card-body">
          <ul class="timeline">
            <li class="timeline-item">
              <span class="timeline-point timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>12 Invoices have been paid</h6>
                  <span class="timeline-event-time">12 min ago</span>
                </div>
                <p>Invoices have been paid to the company.</p>
                <div class="media align-items-center">
                  <img
                    class="mr-1"
                    src="{{asset('images/icons/file-icons/pdf.png')}}"
                    alt="invoice"
                    height="23"
                  />
                  <div class="media-body">invoice.pdf</div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Client Meeting</h6>
                  <span class="timeline-event-time">45 min ago</span>
                </div>
                <p>Project meeting with john @10:15am.</p>
                <div class="media align-items-center">
                  <div class="avatar">
                    <img src="{{asset('images/avatars/12-small.png')}}" alt="avatar" height="38" width="38" />
                  </div>
                  <div class="media-body ml-50">
                    <h6 class="mb-0">John Doe (Client)</h6>
                    <span>CEO of Infibeam</span>
                  </div>
                </div>
              </div>
            </li>
            <li class="timeline-item">
              <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
              <div class="timeline-event">
                <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                  <h6>Create a new project for client</h6>
                  <span class="timeline-event-time">2 days ago</span>
                </div>
                <p class="mb-0">Add files to new design folder</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- information Ends -->

    <!-- User Permissions Starts -->
    <div class="col-md-6">
      <!-- User Permissions -->
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Permissions</h4>
        </div>
        <p class="card-text ml-2">Permission according to roles</p>
        <div class="table-responsive">
          <table class="table table-striped table-borderless">
            <thead class="thead-light">
              <tr>
                <th>Module</th>
                <th>Read</th>
                <th>Write</th>
                <th>Create</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Admin</td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="admin-read" checked disabled />
                    <label class="custom-control-label" for="admin-read"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="admin-write" disabled />
                    <label class="custom-control-label" for="admin-write"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="admin-create" disabled />
                    <label class="custom-control-label" for="admin-create"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="admin-delete" disabled />
                    <label class="custom-control-label" for="admin-delete"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Staff</td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="staff-read" disabled />
                    <label class="custom-control-label" for="staff-read"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="staff-write" checked disabled />
                    <label class="custom-control-label" for="staff-write"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="staff-create" disabled />
                    <label class="custom-control-label" for="staff-create"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="staff-delete" disabled />
                    <label class="custom-control-label" for="staff-delete"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Author</td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="author-read" checked disabled />
                    <label class="custom-control-label" for="author-read"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="author-write" disabled />
                    <label class="custom-control-label" for="author-write"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="author-create" checked disabled />
                    <label class="custom-control-label" for="author-create"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="author-delete" disabled />
                    <label class="custom-control-label" for="author-delete"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Contributor</td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="contributor-read" disabled />
                    <label class="custom-control-label" for="contributor-read"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="contributor-write" disabled />
                    <label class="custom-control-label" for="contributor-write"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="contributor-create" disabled />
                    <label class="custom-control-label" for="contributor-create"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="contributor-delete" disabled />
                    <label class="custom-control-label" for="contributor-delete"></label>
                  </div>
                </td>
              </tr>
              <tr>
                <td>User</td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="user-read" disabled />
                    <label class="custom-control-label" for="user-read"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="user-create" disabled />
                    <label class="custom-control-label" for="user-create"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="user-write" disabled />
                    <label class="custom-control-label" for="user-write"></label>
                  </div>
                </td>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="user-delete" checked disabled />
                    <label class="custom-control-label" for="user-delete"></label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /User Permissions -->
    </div>
    <!-- User Permissions Ends -->
  </div>
  <!-- User Timeline & Permissions Ends -->

  <!-- User Invoice Starts-->
  <div class="row invoice-list-wrapper">
    <div class="col-12">
      <div class="card">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather="trending-up"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class="text-truncate">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class="cell-fit">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /User Invoice Ends-->
</section>
@endsection

@section('vendor-script')
<script src="{{asset(mix('vendors/js/extensions/moment.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js'))}}"></script>
<script src="{{asset(mix('vendors/js/tables/datatable/buttons.bootstrap4.min.js'))}}"></script>
@endsection
@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/pages/app-user-view.js')) }}"></script>
@endsection
