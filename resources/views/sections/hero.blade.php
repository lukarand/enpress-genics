<div class="section section-hero d-flex justify-content-center align-items-center"
  style="background-image: url('{{ $data->hero_image}}');">
  <div class="text-center text-white">
    <h1 class="mb-4 h2 h1-md">{{$data->hero_title}}</h1>
    <p @if (isset($data->p_width)) style="max-width: {{$data->p_width}};" @endif>
      {!!$data->hero_content!!}</p>
  </div>
</div>
