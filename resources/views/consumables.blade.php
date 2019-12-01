@extends('layouts.app')
@section ('content')
  @include('sections.hero', [
    'data' => (object)([
      'hero_image' => asset('dist/media/hero-image/hero-services-image.jpg'),
      'hero_title' => 'Consumables',
      'hero_content' => "This content is coming soon - in the meantime get in touch via our <a class='text-success' href='/contact'>Contact Us</a> page."
    ])
  ])
  
  @include('sections.testing')
@endsection