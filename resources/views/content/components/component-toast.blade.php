@extends('layouts/contentLayoutMaster')

@section('title', 'Toast')

@section('content')
<!-- Start of Bootstrap Toasts -->
<section id="bootstrap-toasts">
  <!-- Translucent toast and basic toasts starts  -->
  <div class="row match-height">
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Toast</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single
            element to contain your “toasted” content and strongly encourage a dismiss button.
          </p>
          <button class="btn btn-outline-primary toast-basic-toggler mt-2">Toast</button>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Translucent</h4>
          <p class="card-text mt-1">
            Toasts are slightly translucent, too, so they blend over whatever they might appear over. For browsers that
            support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.
          </p>
        </div>
        <div class="card-body bg-primary rounded-bottom">
          <div
            class="toast show toast-wrapper toast-translucent mt-1"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
          >
            <div class="toast-header">
              <img
                src="{{asset('images/logo/logo.png')}}"
                class="mr-1"
                alt="Toast image"
                height="18"
                width="25"
              />
              <strong class="mr-auto">Vue Admin</strong>
              <small class="text-muted">11 mins ago</small>
              <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Translucent toast and basic toasts starts  -->

  <!-- toast stacking and placement starts -->
  <div class="row match-height">
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Stacking</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            When you have multiple toasts, it will vertically stack them in a readable manner.
          </p>
          <div class="demo-inline-spacing">
            <button class="btn btn-outline-primary toast-autohide-toggler">Auto Hide Off</button>
            <button class="btn btn-outline-primary toast-stacked-toggler">Staked Toast</button>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Placement</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            You can place toasts with custom CSS as you need them, put the positioning styles right on the
            <code>.toast</code> or you can also get fancy with flexbox utilities to align toasts horizontally and/or
            vertically.
          </p>
          <button class="btn btn-outline-primary placement">Toast Placement</button>
        </div>
      </div>
    </div>
  </div>
  <!-- toast stacking and placement starts -->
</section>
<!-- End of Bootstrap Toasts -->

<!-- Fixed Center Placement Toast Starts -->
<div
  aria-live="polite"
  aria-atomic="true"
  class="toast-placement d-flex justify-content-center align-items-center"
  data-autohide="false"
>
  <div style="position: fixed; top: 1rem; z-index: 1030">
    <div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
      <div class="toast-header">
        <img src="{{asset('images/logo/logo.png')}}" class="mr-1" alt="Toast Image" height="18" width="25" />
        <strong class="mr-auto">Vue Admin</strong>
        <small class="text-muted">1 mins ago</small>
        <button type="button" class="ml-50 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">Hello, world! This is a toast message.</div>
    </div>
  </div>
</div>
<!-- Fixed Center Placement Toast ends -->

<!-- Basic toast -->
<div
  class="toast toast-basic hide position-fixed"
  role="alert"
  aria-live="assertive"
  aria-atomic="true"
  data-delay="5000"
  style="top: 1rem; right: 1rem"
>
  <div class="toast-header">
    <img src="{{asset('images/logo/logo.png')}}" class="mr-1" alt="Toast image" height="18" width="25" />
    <strong class="mr-auto">Vue Admin</strong>
    <small class="text-muted">11 mins ago</small>
    <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
</div>
<!-- Basic toast ends -->

<div aria-live="polite" aria-atomic="true" style="position: relative">
  <!-- Position it -->
  <div style="position: fixed; top: 1rem; right: 1rem; margin-left: 1rem; z-index: 1030">
    <!-- Auto hide off -->
    <div class="toast toast-autohide hide" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
      <div class="toast-header">
        <img src="{{asset('images/logo/logo.png')}}" class="mr-1" alt="Toast Image" height="18" width="25" />
        <strong class="mr-auto">Vue Admin</strong>
        <small class="text-muted">just now</small>
        <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">See? Just like this. Fruitcake chocolate bar tootsie jelly beans cake.</div>
    </div>
    <!-- Auto hide off end -->

    <!-- Stacked Toast -->
    <div class="toast toast-stacked hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
      <div class="toast-header">
        <img src="{{asset('images/logo/logo.png')}}" class="mr-1" alt="Toast Image" height="18" width="25" />
        <strong class="mr-auto">Vue Admin</strong>
        <small class="text-muted">2 seconds ago</small>
        <button type="button" class="ml-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">Heads up, toasts will stack automatically.</div>
    </div>
    <!-- Stacked Toast End -->
  </div>
</div>

@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/components/components-bs-toast.js')) }}"></script>
@endsection
