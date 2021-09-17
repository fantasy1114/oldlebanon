@section('content-sidebar')
<div class="sidebar-content todo-sidebar">
  <div class="todo-app-menu">
    <div class="add-task">
      <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#new-task-modal">
        Add Task
      </button>
    </div>
    <div class="sidebar-menu-list">
      <div class="list-group list-group-filters">
        <a href="javascript:void(0)" class="list-group-item list-group-item-action active">
          <i data-feather="mail" class="font-medium-3 mr-50"></i>
          <span class="align-middle"> My Task</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="star" class="font-medium-3 mr-50"></i> <span class="align-middle">Important</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="check" class="font-medium-3 mr-50"></i> <span class="align-middle">Completed</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="trash" class="font-medium-3 mr-50"></i> <span class="align-middle">Deleted</span>
        </a>
      </div>
      <div class="mt-3 px-2 d-flex justify-content-between">
        <h6 class="section-label mb-1">Tags</h6>
        <i data-feather="plus" class="cursor-pointer"></i>
      </div>
      <div class="list-group list-group-labels">
        <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
          <span class="bullet bullet-sm bullet-primary mr-1"></span>Team
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
          <span class="bullet bullet-sm bullet-success mr-1"></span>Low
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
          <span class="bullet bullet-sm bullet-warning mr-1"></span>Medium
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
          <span class="bullet bullet-sm bullet-danger mr-1"></span>High
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex align-items-center">
          <span class="bullet bullet-sm bullet-info mr-1"></span>Update
        </a>
      </div>
    </div>
  </div>
</div>

@endsection
