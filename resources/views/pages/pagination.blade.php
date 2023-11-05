{{-- <nav class=" paginate">
    <ul>
        <li><a href="">
                <div class="list_page disable"><span><i class="fa-solid fa-angle-left"></i></span></div>
            </a></li>
        <li><a href="">
                <div class="list_page active"><span>1</span></div>
            </a></li>
        <li><a href="">
                <div class="list_page"><span>1</span></div>
            </a></li>
        <li><a href="">
                <div class="list_page"><span>1</span></div>
            </a></li>
        <li><a href="">
                <div class="list_page"><span>1</span></div>
            </a></li>
        <li><a href="">
                <div class="list_page"><span><i class="fa-solid fa-angle-right"></i></span></i></div>
            </a></li>
    </ul>
</nav> --}}

@if ($paginator->hasPages())
<nav class=" paginate" style="margin-bottom: 1rem">
    <ul style="display: flex">
        @if ($paginator->onFirstPage())
            <li>
                <a tabindex="-1"><div class="list_page disable"><span><i class="fa-solid fa-angle-left"></i></span></div></a>
            </li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"><div class="list_page"><span><i class="fa-solid fa-angle-left"></i></span></div></a></li>
        @endif
      
        @foreach ($elements as $element)
            @if (is_string($element))
               {{ $element }}
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active">
                            <a>
                            <div class="list_page active"><span>{{ $page }}</span></div>
                        </a>
                        </li>
                    @else
                        <li>
                            
                            <a href="{{ $url }}">
                                <div class="list_page"><span>{{ $page }}</span></div>
                            </a>
                            
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"><div class="list_page"><span><i class="fa-solid fa-angle-right"></i></span></div></a>
            </li>
        @else
            <li>
                <a><div class="list_page disable"><span><i class="fa-solid fa-angle-right"></i></span></div></a>
            </li>
        @endif
    </ul>
@endif