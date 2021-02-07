{{-- <nav id="pagination" class="pagination_wrap pagination_pages">
    <span class="pager_current active ">1</span>
    <a href="#" class="">2</a>
    <a href="#" class="pager_next "></a>
    <a href="#" class="pager_last "></a>
</nav> --}}

@if ($paginator->hasPages())
    <nav id="pagination" class="pagination_wrap pagination_pages">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <a href="{{ $paginator->previousPageUrl() }}" class="pager_prev "></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a href="#" class="disabled" aria-disabled="true"><span>{{ $element }}</span></a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="#" class="pager_current active">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="pager_next "></a>
        {{-- @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo;</span>
            </li> --}}
        @endif
    </nav>
@endif
