@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
    'data' => (object)([
      'hero_image' => asset('dist/media/hero-image/hero-services-image.jpg'),
      'hero_title' => 'News',
      'hero_content' => "Stay in touch with the Genics team."
    ])
  ])
  @include('sections.post-article')
  @include('sections.testing')
@endsection
