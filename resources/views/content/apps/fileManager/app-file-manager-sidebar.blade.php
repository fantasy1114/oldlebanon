@section('content-sidebar')
<div class="sidebar-file-manager">
  <div class="sidebar-inner">
    <!-- sidebar menu links starts -->
    <!-- add file button -->
    <div class="dropdown dropdown-actions">
      <button
        class="btn btn-primary add-file-btn text-center btn-block"
        type="button"
        id="addNewFile"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="true"
      >
        <span class="align-middle">Add New</span>
      </button>
      <div class="dropdown-menu" aria-labelledby="addNewFile">
        <div class="dropdown-item" data-toggle="modal" data-target="#new-folder-modal">
          <div class="mb-0">
            <i data-feather="folder" class="mr-25"></i>
            <span class="align-middle">Folder</span>
          </div>
        </div>
        <div class="dropdown-item">
          <div class="mb-0" for="file-upload">
            <i data-feather="upload-cloud" class="mr-25"></i>
            <span class="align-middle">File Upload</span>
            <input type="file" id="file-upload" hidden />
          </div>
        </div>
        <div class="dropdown-item">
          <div for="folder-upload" class="mb-0">
            <i data-feather="upload-cloud" class="mr-25"></i>
            <span class="align-middle">Folder Upload</span>
            <input type="file" id="folder-upload" webkitdirectory mozdirectory hidden />
          </div>
        </div>
      </div>
    </div>
    <!-- add file button ends -->

    <!-- sidebar list items starts  -->
    <div class="sidebar-list">
      <!-- links for file manager sidebar -->
      <div class="list-group">
        <div class="my-drive"></div>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action active">
          <i data-feather="star" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Important</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="clock" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Recents</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="trash" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Deleted Files</span>
        </a>
      </div>
      <div class="list-group list-group-labels">
        <h6 class="section-label px-2 mb-1">Labels</h6>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="file-text" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Documents</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="image" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Images</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="video" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Videos</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="music" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Audio</span>
        </a>
        <a href="javascript:void(0)" class="list-group-item list-group-item-action">
          <i data-feather="layers" class="mr-50 font-medium-3"></i>
          <span class="align-middle">Archives</span>
        </a>
      </div>
      <!-- links for file manager sidebar ends -->

      <!-- storage status of file manager starts-->
      <div class="storage-status mb-1 px-2">
        <h6 class="section-label mb-1">Storage Status</h6>
        <div class="d-flex align-items-center cursor-pointer">
          <i data-feather="server" class="font-large-1"></i>
          <div class="file-manager-progress ml-1">
            <span>68GB used of 100GB</span>
            <div class="progress progress-bar-primary my-50" style="height: 6px">
              <div
                class="progress-bar"
                role="progressbar"
                aria-valuenow="80"
                aria-valuemin="80"
                aria-valuemax="100"
                style="width: 80%"
              ></div>
            </div>
          </div>
        </div>
      </div>
      <!-- storage status of file manager ends-->
    </div>
    <!-- side bar list items ends  -->
    <!-- <div class="sidebar-menu-list">
    </div> -->
    <!-- sidebar menu links ends -->
  </div>
</div>
@endsection
