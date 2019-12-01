@if (count($pager) > 1)
  <div class="mt-6">
    <ul class="pagination justify-content-center">
      <li class="page-item {{ $page > 1 ? '' : 'disabled' }}">
        <a href="?{{ http_build_query(['page' => $page - 1] + $query) }}" class="page-link bg-light" aria-label="Previous">
          <i aria-hidden="true" class="icon-chevron-left"></i>
        </a>
      </li>
      @foreach($pager as $item)
        <li class="page-item {{ $item->active ? 'active' : '' }}"><a href="{{ $item->url }}" class="page-link">{{ $item->page }}</a></li>
      @endforeach
      <li class="page-item {{ $page + 1 > $total ? 'disabled' : '' }}">
        <a href="?{{ http_build_query(['page' => $page + 1] + $query) }}" class="page-link bg-light" aria-label="Next">
          <i aria-hidden="true" class="icon-chevron-right"></i>
        </a>
      </li>
    </ul>
  </div>
@endif