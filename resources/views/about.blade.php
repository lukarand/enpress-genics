@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
        'data' => (object)([
          'hero_image' => asset('dist/media/hero-image/hero-about-image.jpg'),
          'hero_title' => 'About Genics',
          'hero_content' => "Revolutionising today's farming practices to deliver global food security for the future."
        ])
      ])
  @include('sections.about')
  @include('sections.works')
  @include('sections.results')
  @include('sections.proposition')
  @include('sections.testing')
@endsection