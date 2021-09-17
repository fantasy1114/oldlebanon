@extends('layouts/contentLayoutMaster')

@section('title', 'Pill Badges')

@section('content')
<!-- Basic Pill Badges start-->
<section id="basic-pill-badges">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Contextual</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Use the <code>.badge</code> class, followed by<code>.badge-pill</code> with
            <code>.badge-&#123;color&#125;</code>class within element to create contextual pill badge.
          </p>
          <div class="demo-inline-spacing">
            <div class="badge badge-pill badge-primary">Primary</div>
            <div class="badge badge-pill badge-secondary">Secondary</div>
            <div class="badge badge-pill badge-success">Success</div>
            <div class="badge badge-pill badge-danger">Danger</div>
            <div class="badge badge-pill badge-warning">Warning</div>
            <div class="badge badge-pill badge-info">Info</div>
            <div class="badge badge-pill badge-dark">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Pill Badges end -->

<!-- Badge Pill Glow Starts -->
<section id="badge-pill-glow">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Glow Badges</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">Use class <code>.badge-glow</code> to add glow effect to contextual badge.</p>
          <div class="demo-inline-spacing">
            <div class="badge badge-pill badge-glow badge-primary">Primary</div>
            <div class="badge badge-pill badge-glow badge-secondary">Secondary</div>
            <div class="badge badge-pill badge-glow badge-success">Success</div>
            <div class="badge badge-pill badge-glow badge-danger">Danger</div>
            <div class="badge badge-pill badge-glow badge-warning">Warning</div>
            <div class="badge badge-pill badge-glow badge-info">Info</div>
            <div class="badge badge-pill badge-glow badge-dark">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill Glow Ends -->

<!-- Badge Pill light Starts -->
<section id="badge-pill-light">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Light Badges</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Use class <code>.badge-pill</code> class with <code>.badge.badge-light-&#123;color&#125;</code> to add light
            effect to your badge.
          </p>
          <div class="demo-inline-spacing">
            <div class="badge badge-pill badge-light-primary">Primary</div>
            <div class="badge badge-pill badge-light-secondary">Secondary</div>
            <div class="badge badge-pill badge-light-success">Success</div>
            <div class="badge badge-pill badge-light-danger">Danger</div>
            <div class="badge badge-pill badge-light-warning">Warning</div>
            <div class="badge badge-pill badge-light-info">Info</div>
            <div class="badge badge-pill badge-light-dark">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill light Ends -->

<!-- Pill Badges as Notification start-->
<section id="pill-badges-as-notification">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pill Badges as Notification</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use <code>.badge-up</code> to set pill badge to higher than other text. So that it can work with
            notifications also.
          </p>
          <div class="demo-inline-spacing">
            <div class="position-relative d-inline-block">
              <i data-feather="bell" class="font-medium-5 text-primary"></i>
              <span class="badge badge-pill badge-primary badge-up">4</span>
            </div>
            <div class="position-relative d-inline-block">
              <i data-feather="bell" class="font-medium-5 text-info"></i>
              <span class="badge badge-pill badge-info badge-up">5</span>
            </div>
            <div class="position-relative d-inline-block">
              <i data-feather="bell" class="font-medium-5 text-danger"></i>
              <span class="badge badge-pill badge-danger badge-glow badge-up">6</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pill Badges as Notification end -->
<!-- Badge Pill Options Starts -->
<section id="badge-pill-options">
  <div class="row match-height">
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Badge Pill Link</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use class <code>.badge.badge-pill</code> with <code>&lt;a&gt;</code> tag to make your badge a link.
          </p>
          <a class="badge badge-pill badge-primary" href="https://pixinvent.com" target="_blank">Primary</a>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Block Badge Pill</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use <code>.d-block</code> with <code>.badge-pill</code> to display your badge as block level element.
          </p>
          <div class="badge badge-pill d-block badge-danger">
            <span>Block Badge Pill</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Pill Options Ends -->

@endsection
