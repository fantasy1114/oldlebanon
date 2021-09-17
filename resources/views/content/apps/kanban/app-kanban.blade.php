@extends('layouts/contentLayoutMaster')

@section('title', 'Kanban')

@section('vendor-style')
  <!-- Vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/jkanban/jkanban.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/katex.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/monokai-sublime.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.bubble.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-quill-editor.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-kanban.css')) }}">
@endsection
@section('content')
<!-- Kanban starts -->
<section class="app-kanban-wrapper">
  <div class="row">
    <div class="col-12">
      <form class="add-new-board">
        <label class="add-new-btn mb-2" for="add-new-board-input">
          <i class="align-middle" data-feather="plus"></i>
          <span class="align-middle">Add new</span>
        </label>
        <input
          type="text"
          class="form-control add-new-board-input mb-50"
          placeholder="Add Board Title"
          id="add-new-board-input"
          required
        />
        <div class="form-group add-new-board-input">
          <button class="btn btn-primary btn-sm mr-75">Add</button>
          <button type="button" class="btn btn-outline-secondary btn-sm cancel-add-new">Cancel</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Kanban content starts -->
  <div class="kanban-wrapper"></div>
  <!-- Kanban content ends -->
  <!-- Kanban Sidebar starts -->
  <div class="modal modal-slide-in update-item-sidebar fade">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">Update Item</h5>
        </div>
        <div class="modal-body flex-grow-1">
          <ul class="nav nav-tabs tabs-line">
            <li class="nav-item">
              <a class="nav-link nav-link-update active" data-toggle="tab" href="#tab-update">
                <i data-feather="edit"></i>
                <span class="align-middle">Update</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-activity" data-toggle="tab" href="#tab-activity">
                <i data-feather="activity"></i>
                <span class="align-middle">Activity</span>
              </a>
            </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane tab-pane-update fade show active" id="tab-update" role="tabpanel">
              <form class="update-item-form">
                <div class="form-group">
                  <label class="form-label" for="title">Title</label>
                  <input type="text" id="title" class="form-control" placeholder="Enter Title" />
                </div>
                <div class="form-group">
                  <label class="form-label" for="due-date">Due Date</label>
                  <input type="text" id="due-date" class="form-control" placeholder="Enter Due Date" />
                </div>
                <div class="form-group">
                  <label class="form-label" for="label">Label</label>
                  <select class="select2 select2-label form-control" id="label">
                    <option value="">&nbsp;</option>
                    <option data-color="badge-light-success" value="UX">UX</option>
                    <option data-color="badge-light-warning" value="Images">Images</option>
                    <option data-color="badge-light-info" value="App">App</option>
                    <option data-color="badge-light-danger" value="Code Review">Code Review</option>
                    <option data-color="badge-light-success" value="Forms">Forms</option>
                    <option data-color="badge-light-primary" value="Charts & Maps">Charts & Maps</option>
                  </select>
                </div>
                <div class="form-group">
                  <label class="form-label">Assigned</label>
                  <ul class="assigned pl-0"></ul>
                </div>
                <div class="form-group">
                  <label class="form-label" for="attachments">Attachments</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="attachments" />
                    <label class="custom-file-label" for="attachments">Choose file</label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label">Comment</label>
                  <div class="comment-editor border-bottom-0"></div>
                  <div class="d-flex justify-content-end comment-toolbar">
                    <span class="ql-formats mr-0">
                      <button class="ql-bold"></button>
                      <button class="ql-italic"></button>
                      <button class="ql-underline"></button>
                      <button class="ql-link"></button>
                      <button class="ql-image"></button>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div class="d-flex flex-wrap">
                    <button class="btn btn-primary mr-1" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Delete</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane tab-pane-activity pb-1 fade" id="tab-activity" role="tabpanel">
              <div class="media mb-1">
                <div class="avatar bg-light-success my-0 ml-0 mr-50">
                  <span class="avatar-content">HJ</span>
                </div>
                <div class="media-body">
                  <p class="mb-0"><span class="font-weight-bold">Jordan</span> Left the board.</p>
                  <small class="text-muted">Today 11:00 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar my-0 ml-0 mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="32" />
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Dianna</span> mentioned
                    <span class="font-weight-bold text-primary">@bruce</span> in a comment.
                  </p>
                  <small class="text-muted">Today 10:20 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar my-0 ml-0 mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-2.jpg') }}" alt="Avatar" height="32" />
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Martian</span> added moved Charts & Maps task to the done board.
                  </p>
                  <small class="text-muted">Today 10:00 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar my-0 ml-0 mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" height="32" />
                </div>
                <div class="media-body">
                  <p class="mb-0"><span class="font-weight-bold">Barry</span> Commented on App review task.</p>
                  <small class="text-muted">Today 8:32 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar bg-light-dark my-0 ml-0 mr-50">
                  <span class="avatar-content">BW</span>
                </div>
                <div class="media-body">
                  <p class="mb-0"><span class="font-weight-bold">Bruce</span> was assigned task of code review.</p>
                  <small class="text-muted">Today 8:30 PM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar bg-light-danger my-0 ml-0 mr-50">
                  <span class="avatar-content">CK</span>
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Clark</span> assigned task UX Research to
                    <span class="font-weight-bold text-primary">@martian</span>
                  </p>
                  <small class="text-muted">Today 8:00 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar my-0 ml-0 mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-4.jpg') }}" alt="Avatar" height="32" />
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Ray</span> Added moved
                    <span class="font-weight-bold">Forms & Tables</span> task from in progress to done.
                  </p>
                  <small class="text-muted">Today 7:45 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar my-0 ml-0 mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="Avatar" height="32" />
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Barry</span> Complete all the tasks assigned to him.
                  </p>
                  <small class="text-muted">Today 7:17 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar bg-light-success my-0 ml-0 mr-50">
                  <span class="avatar-content">HJ</span>
                </div>
                <div class="media-body">
                  <p class="mb-0"><span class="font-weight-bold">Jordan</span> added task to update new images.</p>
                  <small class="text-muted">Today 7:00 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar my-0 ml-0 mr-50">
                  <img src="{{ asset('images/portrait/small/avatar-s-6.jpg') }}" alt="Avatar" height="32" />
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Dianna</span> moved task
                    <span class="font-weight-bold">FAQ UX</span> from in progress to done board.
                  </p>
                  <small class="text-muted">Today 7:00 AM</small>
                </div>
              </div>
              <div class="media mb-1">
                <div class="avatar bg-light-danger my-0 ml-0 mr-50">
                  <span class="avatar-content">CK</span>
                </div>
                <div class="media-body">
                  <p class="mb-0">
                    <span class="font-weight-bold">Clark</span> added new board with name
                    <span class="font-weight-bold">Done</span>.
                  </p>
                  <small class="text-muted">Yesterday 3:00 PM</small>
                </div>
              </div>
              <div class="media align-items-center">
                <div class="avatar bg-light-dark my-0 ml-0 mr-50">
                  <span class="avatar-content">BW</span>
                </div>
                <div class="media-body">
                  <p class="mb-0"><span class="font-weight-bold">Bruce</span> added new task in progress board.</p>
                  <small class="text-muted">Yesterday 12:00 PM</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Kanban Sidebar ends -->
</section>
<!-- Kanban ends -->

@endsection

@section('vendor-script')
  <!-- Vendor js files -->
  <script src="{{ asset(mix('vendors/js/jkanban/jkanban.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/katex.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/highlight.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/editors/quill/quill.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/app-kanban.js')) }}"></script>

@endsection
