@if ($paginator->hasPages())
    <ul class="list">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="item disabled"><span class="btn btn-gray">&laquo;</span></li>
        @else
            <li class="item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="link btn btn-green">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="item disabled"><span class="btn btn-gray">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="item active"><span class="btn btn-gray">{{ $page }}</span></li>
                    @else
                        <li class="item"><a href="{{ $url }}" class="link btn btn-green">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="item"><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="link btn btn-green">&raquo;</a></li>
        @else
            <li class="item disabled"><span class="btn btn-gray">&raquo;</span></li>
        @endif
    </ul>
@endif
