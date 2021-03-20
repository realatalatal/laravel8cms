@if ($paginator->hasPages())
    <nav>
        <ul class="wn__pagination af-rtl">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                  <a aria-hidden="true"><i class="zmdi {{$lang == 'fa' ? 'zmdi-chevron-right' : 'zmdi-chevron-left'}}"></i></a>
                </li>
            @else
                <li class="page-item">
                  <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')"><i class="zmdi {{$lang == 'fa' ? 'zmdi-chevron-right' : 'zmdi-chevron-left'}}"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item" aria-disabled="true"><span class="page-link">{{$element}}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><a>{{$lang == "fa" ? toEastern($page) : $page}}</a></li>
                        @else
                            <li><a href="{{$url}}">{{$lang == "fa" ? toEastern($page) : $page}}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="zmdi {{$lang == 'fa' ? 'zmdi-chevron-left' : 'zmdi-chevron-right'}}"></i></a></li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')"><a aria-hidden="true"><i class="zmdi {{$lang == 'fa' ? 'zmdi-chevron-left' : 'zmdi-chevron-right'}}"></i></a></li>
            @endif
        </ul>
    </nav>
@endif
