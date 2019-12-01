@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
    'data' => (object)([
      'hero_image' => asset('dist/media/hero-image/hero-services-image.jpg'),
      'hero_title' => 'News',
      'hero_content' => "Stay in touch with the Genics team."
    ])
  ])
  <div class="section py-6 py-md-13">
    <div class="container">
      <div class="row justify-content-center">
        @foreach($posts->get() as $post)
          @include('components.card-news', compact('post'))
        @endforeach
      </div>
      @include ('components.pager')
    </div>
  </div>
  @include('sections.testing')
@endsection
