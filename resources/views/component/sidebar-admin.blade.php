<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
  <div>
    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('images/logo/logo1.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('/images/logo/logo1.png') }}" alt=""></a>
      <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
      <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
    </div>

    <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}"  alt=""></a></div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn"><a href="index.html"><img class="img-fluid" src="{{ asset('images/logo/logo-icon.png') }}"  alt=""></a>
            <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>

          <li class="sidebar-main-title">
            <div>
              <h6>BALITA</h6>
            </div>
          </li>
          <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin/dashboard') }}">
                <svg class="stroke-icon">
                    <use href="{{ asset('svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg>
                <svg class="fill-icon">
                    <use href="{{ asset('svg/icon-sprite.svg#fill-home') }}"></use>
                </svg>
                <span>Dashboard</span>
            </a>
          </li>

          <!--<li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link sidebar-title link-nav" href="{{ url('databalita') }}">
            <svg class="stroke-icon">
              <use href="{{ asset('svg/icon-sprite.svg#stroke-sample-page') }}"></use>
            </svg>
            <svg class="fill-icon">
              <use href="{{ asset('svg/icon-sprite.svg#fill-sample-page') }}"></use>
            </svg><span>Data Balita</span></a></li>-->

            <li class="sidebar-list">
              <i class="fa-solid fa-thumbtack"></i>
              <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin/dataset') }}">
                  <svg class="stroke-icon">
                      <use href="{{ asset('svg/icon-sprite.svg#stroke-file') }}"></use>
                  </svg>
                  <svg class="fill-icon">
                      <use href="{{ asset('svg/icon-sprite.svg#fill-file') }}"></use>
                  </svg>
                  <span>Dataset</span>
              </a>
            </li>

            <li class="sidebar-list">
              <i class="fa-solid fa-thumbtack"></i>
              <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin/datauser') }}">
                  <svg class="stroke-icon">
                      <use href="{{ asset('svg/icon-sprite.svg#stroke-form') }}"></use>
                  </svg>
                  <svg class="fill-icon">
                      <use href="{{ asset('svg/icon-sprite.svg#fill-form') }}"></use>
                  </svg>
                  <span>Data User</span>
              </a>
            </li>

            <li class="sidebar-list">
              <i class="fa-solid fa-thumbtack"></i>
              <a class="sidebar-link sidebar-title link-nav" href="{{ url('/admin/databalita') }}">
                  <svg class="stroke-icon">
                      <use href="{{ asset('svg/icon-sprite.svg#stroke-form') }}"></use>
                  </svg>
                  <svg class="fill-icon">
                      <use href="{{ asset('svg/icon-sprite.svg#fill-form') }}"></use>
                  </svg>
                  <span>Data Balita</span>
              </a>
            </li>

          </ul>
        </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
  </div>
</div>