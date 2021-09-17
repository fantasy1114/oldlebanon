@extends('layouts/contentLayoutMaster')

@section('title', 'Tooltips')

@section('content')
<!--Tooltip Positions Starts-->
<section id="tooltip-positions">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tooltip Positions</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">Four options are available: top, right, bottom, and left aligned.</p>
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-placement="top"
              title="Tooltip on top"
            >
              Tooltip on top
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-placement="right"
              title="Tooltip on right"
            >
              Tooltip on right
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-placement="bottom"
              title="Tooltip on bottom"
            >
              Tooltip on bottom
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-placement="left"
              title="Tooltip on left"
            >
              Tooltip on left
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Positions Ends -->

<!-- Tooltip Triggers Starts-->
<section id="tooltip-triggers">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tooltip Triggers</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            Tooltip is triggered using - click | hover | focus | manual options. You may pass multiple triggers;
            separate them with a space. "manual" cannot be combined with any other trigger.
          </p>
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-original-title="Click Triggered"
              data-trigger="click"
            >
              On Click Trigger
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-original-title="Focus Triggered"
              data-trigger="focus"
            >
              On Focus Trigger
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-original-title="Hover Triggered"
            >
              On Hover Trigger
            </button>
            <button
              type="button"
              class="btn btn-outline-primary manual"
              data-toggle="tooltip"
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
<!-- Tooltip Triggers Ends -->

<!-- Tooltip Options -->
<section id="tooltip-options">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tooltip Options</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              data-toggle="tooltip"
              data-original-title="Without Fade Animation"
              data-animation="false"
            >
              No animation
            </button>
            <button
              type="button"
              class="btn btn-outline-primary delay"
              data-toggle="tooltip"
              data-original-title="Click Triggered"
              data-delay="500"
            >
              Delay Tooltip
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Options Ends -->

<!-- Tooltip Methods Starts-->
<section id="tooltip-methods">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tooltip Methods</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            This is considered a “manual” triggering of the tooltip. Tooltips with zero-length titles are never
            displayed.
          </p>
          <div class="demo-inline-spacing">
            <button
              type="button"
              class="btn btn-outline-primary"
              id="show-method"
              data-popup="tooltip"
              data-original-title="Show Method Tooltip"
              data-trigger="manual"
            >
              Show Method <i data-feather="play-circle" class="ml-1"></i>
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              id="hide-method"
              data-popup="tooltip"
              data-original-title="Hide Method Tooltip"
              data-trigger="manual"
            >
              Hide Method <i data-feather="play-circle" class="ml-1"></i>
            </button>
            <button
              type="button"
              class="btn btn-outline-primary"
              id="toggle-method"
              data-popup="tooltip"
              data-original-title="Toggle Method Tooltip"
              data-trigger="manual"
            >
              Toggle Method <i data-feather="play-circle" class="ml-1"></i>
            </button>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-primary"
                data-toggle="tooltip"
                data-original-title="Dispose Method Tooltip"
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
<!-- Tooltip Methods Ends -->

<!-- Tooltip Events starts -->
<section id="tooltip-events">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tooltip Events</h4>
        </div>
        <div class="card-body">
          <div class="demo-inline-spacing">
            <button type="button" class="btn btn-outline-primary" id="show-tooltip">Show Event Tooltip</button>
            <button type="button" class="btn btn-outline-primary" id="shown-tooltip">Shown Event Tooltip</button>
            <button type="button" class="btn btn-outline-primary" id="hide-tooltip">Hide Event Tooltip</button>
            <button type="button" class="btn btn-outline-primary" id="hidden-tooltip">Hidden Event Tooltip</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Tooltip Events ends -->
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset(mix('js/scripts/components/components-tooltips.js')) }}"></script>
@endsection
