@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
      'data' => (object)([
        'hero_image' => asset('dist/media/hero-image/hero-team-image.jpg'),
        'hero_title' => 'The Team',
        'hero_content' => "Revolutionising today's farming practices to deliver  global food security for the future."
      ])
    ])
  @include('sections.team')
  @include('sections.advisors')
  @include('sections.testimonials')
  @include('sections.testing')
@endsection