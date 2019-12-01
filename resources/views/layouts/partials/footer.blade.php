<div class="site-footer">
  <div class="bg-secondary pt-9 pb-6">
    <div class="container">
      <div class="d-flex flex-wrap flex-column flex-md-row justify-content-between align-items-center">
        <div class="mb-3">
          <a href="{{ url('/') }}" class="footer-logo">
            <img src="{{ asset('/dist/media/logos/genics-logo-white.png') }}"/>
          </a>
        </div>
        <div class="mb-3">
          <ul class="footer-menu">
            <li><a href="{{ asset('/about') }}">About</a></li>
            <li><a href="{{ asset('/services') }}">Services</a></li>
            <li><a href="{{ asset('/consumables') }}">Consumables</a></li>
            <li><a href="{{ asset('/news') }}">News</a></li>
            <li><a href="{{ asset('/contact') }}">Contact</a></li>
            <li><a href="{{ asset('/support') }}">Support</a></li>
          </ul>
        </div>
      </div>
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <div class="mb-3">&copy; 2019 Genics Pty Ltd</div>
        <div>
          <div class="d-flex flex-column flex-md-row align-items-center">
            {{-- <ul class="support-menu mb-3">
              <li><a href="{{ asset('/disclamer') }}">Disclamer</a></li>
              <li><a href="{{ asset('/privacy') }}">Your privacy</a></li>
              <li><a href="{{ asset('/support') }}">Support</a></li>
            </ul> --}}
            <div class="pl-4 mb-3">
              <a class="anim-flip-logo" href="https://www.weareflip.com">
                We are
                @include('shared.svgs.flip')
                we made this
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
