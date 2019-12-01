<div class="col-lg-4 col-md-6 mb-4 d-flex pr-md-0">
  <div class="card-news shadow">
    <div class="card-image" style="background-image: url({{ $post->featuredImage('large') }});"></div>
    <div class="card-body">
      <p>{{ $post->date() }}</p>
      <h5 class="font-weight-normal">
        @if($q = request()->q and strlen($q) > 2)
            {!! preg_replace( '/' . preg_quote($q) . '/i' , '<mark>$0</mark>', $post->title) !!}
          @else
            {{ $post->title }}
          @endif
      </h5>
      <a href="{{ $post->url() }}" class="btn btn-outline-primary btn-sm">Learn more</a>
    </div>
  </div>
</div>