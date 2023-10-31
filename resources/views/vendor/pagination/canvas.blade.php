<nav>
    <ul class="pagination pagination-rounded pagination-3d pagination-lg">
        @if (!$paginator->onFirstPage())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"> <span
                        aria-hidden="true">«</span></a>
            </li>
        @endif
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next"><span
                        aria-hidden="true">»</span></a>
            </li>
        @endif

    </ul>
</nav>
