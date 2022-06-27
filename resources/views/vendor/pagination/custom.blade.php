@if ($paginator->hasPages())
    <ul class="pagination pagination-rounded justify-content-end my-2">
       
        @if ($paginator->onFirstPage())
            {{-- <li class="page-item"><a href="javascript:;" rel="prev">«</a></li> --}}
            <li class="page-item">
                <a class="page-link" href="javascript:;" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="visually-hidden">Previous</span>
                </a>
            </li>

        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="visually-hidden">Previous</span>
            </a>
        </li>

        @endif



      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="visually-hidden">Next</span>
                </a>
            </li>
        @else
        <li class="page-item">
            <a class="page-link" href="javascript:;" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="visually-hidden">Next</span>
            </a>
        </li>
        @endif
    </ul>
@endif 