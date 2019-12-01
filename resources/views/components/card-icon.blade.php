
<div class="card-icon mb-1 text-white">
  <div class="pt-4 text-center">
    @if (isset($data->animation))
      <i class="anim-icon" data-animation={{ $data->icon_name}}></i>
    @else
      <i class="icon {{ $data->icon_name }}"></i>
    @endif
  </div>
  <p class="mt-5 text-center" @if (isset($data->text_width)) style="width: {{ $data->text_width }};" @endif>
      {!! $data->icon_content !!}
  </p>
</div>