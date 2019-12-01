<div @if (isset($data->back_color)) class="{{$data->back_color}}" @endif>
  <div class="container">
    <div class="py-8">
      <h4 class="mb-3 text-dark">{!!$data->support_title!!}</h4>
      <p>{!!$data->support_content!!}</p>
    </div>
  </div>
</div>
