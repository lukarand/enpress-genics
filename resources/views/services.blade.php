@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
      'data' => (object)([
        'hero_image' => asset('dist/media/hero-image/hero-services-image.jpg'),
        'hero_title' => 'Services',
        'hero_content' => "Smart detection system that will cut testing costs for Aussie prawn farmers and transform how shrimp diseases are managed globally.",
        'p_width' => '539px'
      ])
    ])
  @include('sections.technology')
  @include('sections.introduce-multipath')
  @include('sections.solution-map')
  @include('sections.introduce-id')
  @include('sections.solution-shrimp')
  @include('sections.testing')
@endsection
