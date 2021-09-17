@extends('layouts/contentLayoutMaster')

@section('title', 'Badges')

@section('content')
<!-- Basic Badges Start -->
<section id="basic-badges">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Contextual Badges</h4>
        </div>
        <div class="card-body">
          <p class="card-text m-0">
            Use the <code>.badge</code> class, followed by<code>.badge-&#123;color&#125;</code>class within element to
            create primary badge.
          </p>
          <div class="demo-inline-spacing">
            <div class="badge badge-primary">Primary</div>
            <div class="badge badge-secondary">Secondary</div>
            <div class="badge badge-success">Success</div>
            <div class="badge badge-danger">Danger</div>
            <div class="badge badge-warning">Warning</div>
            <div class="badge badge-info">Info</div>
            <div class="badge badge-dark">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Basic Badges End -->

<!-- Badge Glow Starts -->
<section id="glow-badges">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Glow Badges</h4>
        </div>
        <div class="card-body">
          <p class="card-text m-0">Use class <code>.badge-glow</code> to add glow effect to contextual badge.</p>
          <div class="demo-inline-spacing">
            <div class="badge badge-glow badge-primary">Primary</div>
            <div class="badge badge-glow badge-secondary">Secondary</div>
            <div class="badge badge-glow badge-success">Success</div>
            <div class="badge badge-glow badge-danger">Danger</div>
            <div class="badge badge-glow badge-warning">Warning</div>
            <div class="badge badge-glow badge-info">Info</div>
            <div class="badge badge-glow badge-dark">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge Glow Starts -->

<!-- Badge light Starts -->
<section id="badge-light">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Light Badges</h4>
        </div>
        <div class="card-body">
          <p class="card-text m-0">
            Use class <code>.badge</code> class with <code>.badge-light-&#123;color&#125;</code> to add light effect to
            your badge.
          </p>
          <div class="demo-inline-spacing">
            <div class="badge badge-light-primary">Primary</div>
            <div class="badge badge-light-secondary">Secondary</div>
            <div class="badge badge-light-success">Success</div>
            <div class="badge badge-light-danger">Danger</div>
            <div class="badge badge-light-warning">Warning</div>
            <div class="badge badge-light-info">Info</div>
            <div class="badge badge-light-dark">Dark</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badge light Ends -->

<!-- Badges With Icons Starts -->
<section id="badges-with-icons">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Badges With Icons</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <div class="badge badge-primary">
              <i data-feather="star" class="mr-25"></i>
              <span>Primary</span>
            </div>
            <div class="badge badge-secondary">
              <i data-feather="star" class="mr-25"></i>
              <span>Secondary</span>
            </div>
            <div class="badge badge-success">
              <i data-feather="star" class="mr-25"></i>
              <span>Success</span>
            </div>
            <div class="badge badge-danger">
              <i data-feather="star" class="mr-25"></i>
              <span>Danger</span>
            </div>
            <div class="badge badge-warning">
              <i data-feather="star" class="mr-25"></i>
              <span>Warning</span>
            </div>
            <div class="badge badge-info">
              <i data-feather="star" class="mr-25"></i>
              <span>Info</span>
            </div>
            <div class="badge badge-dark">
              <i data-feather="star" class="mr-25"></i>
              <span>Info</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Badges With Icons End -->

<section id="badges-with-links">
  <div class="row match-height">
    <!-- Badges With Links starts -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Link Badge</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use <code>&lt;a&gt;</code> tag inside your <code>.badge</code> to create a badge with icon
          </p>
          <div class="badge badge-primary">
            <a href="https://pixinvent.com/" target="_blank">
              <i data-feather="link" class="mr-25"></i>
              <span>Link Badge</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Badges With Links ends -->

    <!-- Block Badges start -->
    <div class="col-md-6 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Block Badge</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Use <code>.d-block</code> class with <code>.badge</code>, to display badge as a block element.
          </p>
          <div class="badge d-block badge-primary">
            <span>Badge</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Block Badges end -->
  </div>
</section>
@endsection
