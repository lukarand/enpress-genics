@php
  $path = Request::path();
@endphp
<div class="site-header">
  {{-- <nav class="navbar navbar-nav-top bg-light d-none d-lg-block">
    <div class="container">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="text-dark" href="/support">Support</a>
        </li>
        <li class="pl-2 pl-md-5">
          <i class="icon icon-login text-cyan"></i>
          <a class="text-dark" href="/login">
            Accout Login
          </a>
        </li>
        <li class="pl-2 pl-md-4">
          <div class="dropdown dropdown-languages">
            <a class="dropdown-language text-dark" href="#" role="menu" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="mr-1" src="{{asset('/dist/media/logos/english.svg')}}" alt="english">
              English
            </a>
            <ul class="dropdown-menu shadow" role="menu">
              <li class="dropdown-item">
                <a class="text-dark" href="#">
                  <img class="mr-1" src="{{asset('/dist/media/logos/english.svg')}}" alt="english">
                  English
                </a>
              </li>
              <li class="dropdown-item">
                <a class="text-dark" href="#">
                  <img class="mr-1" src="{{asset('/dist/media/logos/chinese.svg')}}" alt="english">
                  Chinese
                </a>
              </li>
              <li class="dropdown-item">
                <a class="text-dark" href="#">
                  <img class="mr-1" src="{{asset('/dist/media/logos/japanese.svg')}}" alt="english">
                  Japanese
                </a>
              </li>
              <li class="dropdown-item">
                <a class="text-dark" href="#">
                  <img class="mr-1" src="{{asset('/dist/media/logos/spanish.svg')}}" alt="english">
                  Spanish
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav> --}}
  <nav class="navbar-main navbar navbar-expand-lg fixed-top pr-0">
    <div class="navbar-heading">
      <a class="navbar-brand mr-auto" href="/">
        <img src="{{ asset('/dist/media/logos/genics-logo.png') }}" class="brand-dark d-none d-lg-block"/>
        <img src="{{ asset('/dist/media/logos/genics-logo-white.png') }}" class="brand-dark d-block d-lg-none"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar_main">
      <ul class="navbar-nav ml-auto">
        <li id="has-submenu" @if (strrpos($path, 'about') === 0) class="nav-item active" @endif>
          <a class="nav-link nav-link-lg" href="/about" id="collapse-menu" data-target="#submenu" aria-controls="submenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">About</a>
          <ul class="nav-submenu collapse" id="submenu" aria-labelledby="collapse-menu" data-parent="#has-submenu">
            <li @if (strrpos($path, 'about') === 0) class="nav-item active" @endif>
              <a class="nav-sublink" href="/about">About Genics</a>
            </li>
            <li @if (strrpos($path, 'team ') === 0) class="nav-item active" @endif>
              <a class="nav-sublink" href="/team ">The Team</a>
            </li>
          </ul>
        </li>
        <li @if (strrpos($path, 'services') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li @if (strrpos($path, 'consumables') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="/consumables">Consumables</a>
        </li>
        <li @if (strrpos($path, 'news') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="/news">News</a>
        </li>
        <li @if (strrpos($path, 'contact') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
      <div class="nav-quote d-none d-lg-block">
        <a href="/order-testing" class="btn btn-outline-primary btn-sm">Order testing</a>
      </div>
      <div class="navbar-nav-bottom">
        {{-- <ul class="navbar-nav">
          <li>
            <a href="/support">Support</a>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <a href="/login">
              Accout Login
            </a>
            <i class="icon icon-login text-cyan"></i>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="dropdown w-100">
              <a class="dropdown-toggle" href="#" role="menu" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                English
              </a>
              <img class="float-right mr-1" src="{{asset('/dist/media/logos/english.svg')}}" alt="english">
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-item d-flex justify-content-between align-items-center">
                  <a href="#">
                    English
                  </a>
                  <img class="mr-2" src="{{asset('/dist/media/logos/english.svg')}}" alt="english">
                </li>
                <li class="dropdown-item d-flex justify-content-between align-items-center">
                  <a href="#">
                    Chinese
                  </a>
                  <img class="mr-2" src="{{asset('/dist/media/logos/chinese.svg')}}" alt="english">
                </li>
                <li class="dropdown-item d-flex justify-content-between align-items-center">
                  <a href="#">
                    Japanese
                  </a>
                  <img class="mr-2" src="{{asset('/dist/media/logos/japanese.svg')}}" alt="english">
                </li>
                <li class="dropdown-item d-flex justify-content-between align-items-center">
                  <a href="#">
                    Spanish
                  </a>
                  <img class="mr-2" src="{{asset('/dist/media/logos/spanish.svg')}}" alt="english">
                </li>
              </ul>
            </div>
          </li>
        </ul> --}}
        <div class="nav-quote py-7 py-lg-0">
          <a href="/order-testing" class="btn btn-outline-primary btn-sm">Order testing</a>
        </div>
      </div>
    </div>
  </nav>
</div>
