@extends('layouts/contentLayoutMaster')

@section('title', 'Popovers')

@section('content')
<!-- Popover Positions start -->
<section id="popover-positions">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Popover Positions</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">Four options are available: top, right, bottom, and left aligned.</p>
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-placement="top"
              data-container="body"
              data-original-title="Popover on top"
              data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie."
            >
              Popover on top
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-placement="right"
              data-container="body"
              data-original-title="Popover on right"
              data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie."
            >
              Popover on right
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-placement="bottom"
              data-container="body"
              data-original-title="Popover on bottom"
              data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie."
            >
              Popover on bottom
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-placement="left"
              data-container="body"
              data-original-title="Popover on left"
              data-content="Macaroon chocolate candy. I love carrot cake gingerbread cake lemon drops. Muffin sugar plum marzipan pie."
            >
              Popover on left
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Positions end -->

<!-- Popover Triggers start -->
<section id="popover-triggers">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Popover Triggers</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Popover is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
            separate them with a space. "manual" cannot be combined with any other trigger.
          </p>
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
              data-trigger="hover"
              data-original-title="Hover Triggered"
            >
              On Hover Trigger
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
              data-original-title="Click Triggered"
              data-trigger="click"
              data-placement="bottom"
            >
              On Click Trigger
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
              data-original-title="Focus Triggered"
              data-trigger="focus"
            >
              On Focus Trigger
            </button>
            <button
              type="button"
              class="btn btn-outline-primary manual"
              data-toggle="popover"
              data-placement="left"
              data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
              data-original-title="Manual Triggered"
              data-trigger="manual"
            >
              On Manual Trigger
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Triggers end -->

<!-- Popover Options start -->
<section id="popover-options">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Popover Options</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="popover"
              data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
              data-original-title="Without Fade Animation"
              data-animation="false"
              data-placement="top"
            >
              No animation
            </button>
            <button
              type="button"
              class="btn btn-outline-primary delay"
              data-toggle="popover"
              data-content="Tart macaroon marzipan I love soufflé apple pie wafer. Chocolate bar jelly caramels jujubes chocolate cake gummies."
              data-original-title="Click Triggered"
              data-delay="500"
              data-placement="left"
            >
              Delay Popover
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Options end -->

<!-- Popover Methods start -->
<section id="popover-methods">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Popover Methods</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            This is considered a “manual” triggering of the popover.Popovers whose both title and content are
            zero-length are never displayed.
          </p>
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              id="show-method"
              data-popup="popover"
              data-placement="top"
              data-original-title="Show Method Popover"
              data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
              data-trigger="manual"
            >
              Show Method <i data-feather="play-circle" class="ml-1"></i>
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              id="hide-method"
              data-popup="popover"
              data-placement="left"
              data-original-title="Hide Method Popover"
              data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
              data-trigger="manual"
            >
              Hide Method <i data-feather="play-circle" class="ml-1"></i>
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              id="toggle-method"
              data-popup="popover"
              data-original-title="Toggle Method Popover"
              data-placement="top"
              data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
              data-trigger="manual"
            >
              Toggle Method <i data-feather="play-circle" class="ml-1"></i>
            </button>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-primary"
                data-toggle="popover"
                data-original-title="Dispose Method Popover"
                data-placement="left"
                data-content="Fruitcake candy cheesecake jelly beans cake gummies. Cotton candy I love sweet roll jujubes pastry cake halvah cake."
                data-trigger="click"
                id="dispose-method"
              >
                Dispose
              </button>
              <button type="button" class="btn btn-outline-primary" id="dispose">
                <i data-feather="play-circle"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Methods end -->

<!-- Popover Events start -->
<section id="popover-events">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Popover Events</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-outline-primary" id="show-popover">Show Event Popover</button>
            <button type="button" class="btn btn-outline-primary" id="shown-popover">Shown Event Popover</button>
            <button type="button" class="btn btn-outline-primary" id="hide-popover">Hide Event Popover</button>
            <button type="button" class="btn btn-outline-primary" id="hidden-popover">Hidden Event Popover</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Popover Events end -->
@endsection

@section('page-script')
{{-- Page js files --}}
<script src="{{ asset(mix('js/scripts/components/components-popovers.js')) }}"></script>
@endsection
