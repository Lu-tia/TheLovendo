@if ($paginator->hasPages())
    <nav class="pagination left">
        <ul class="pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            @else
            <li><a href="javascript:void(0)" wire:click="setPage('{{ $paginator->previousPageUrl() }}')" rel='prev'><i class="lni lni-chevron-left"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li class="active"><a href="javascript:void(0)">{{$page}}</a></li>
                        @else
                        <li><a href="javascript:void(0)" wire:click="setPage('{{ $url }}')">{{$page}}</a></li>   
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li><a href="javascript:void(0)" wire:click="setPage('{{ $paginator->nextPageUrl() }}')" rel='next'><i class="lni lni-chevron-right"></i></a></li>
            @else
            @endif
        </ul>
    </nav>
@endif
