<div class="section section-post py-6 pb-md-13">
  <div class="container">
    <div class="mb-4">
      <a href="{{ url('./news') }}">
        <span class="font-size-sm">← Back to all articles</span>
      </a>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4">
        @if ($image)
          <div class="post-image" style="background-image: url({{ $image }})"></div>
        @endif
      </div>
      <div class="col-lg-6 pl-lg-2">
        <div class="post-content">
          <p class="font-size-sm">{{ $date }}</p>
          <h2 class="h3 h2-md font-weight-light">{{ $title }}</h2>
          {!! $content !!}
        </div>
      </div> 
    </div>
  </div>
</div>