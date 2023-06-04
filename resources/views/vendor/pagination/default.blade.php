 @if ($paginator->hasPages())
     <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
         <div class="col-12 text-center pb-4 pt-4">

             @if ($paginator->onFirstPage())
                 <a class="btn_mange_pagging disabled"><i class="fa fa-long-arrow-left"></i>
                 </a>
             @else
                 <a href="{{ $paginator->previousPageUrl() }}" class="btn_mange_pagging"><i
                         class="fa fa-long-arrow-left"></i>
                 </a>
             @endif
             {{-- Pagination Elements --}}
             @foreach ($elements as $element)
                 {{-- "Three Dots" Separator --}}
                 @if (is_string($element))
                     <a class="btn_mange_pagging disabled">
                         {{ $element }}</a>
                 @endif

                 {{-- Array Of Links --}}
                 @if (is_array($element))
                     @foreach ($element as $page => $url)
                         @if ($page == $paginator->currentPage())
                             <a class="btn_mange_pagging actived"> {{ $page }}</a>
                         @else
                             <a href="{{ $url }}" class="btn_pagging">{{ $page }}</a>
                         @endif
                     @endforeach
                 @endif
             @endforeach
             {{-- Next Page Link --}}
             @if ($paginator->hasMorePages())
                 <a href="{{ $paginator->nextPageUrl() }}" class="btn_mange_pagging "> <i
                         class="fa fa-long-arrow-right"></i>
                 </a>
             @else
                 <a class="btn_mange_pagging disabled"> <i class="fa fa-long-arrow-right"></i>
                 </a>
             @endif

         </div>
     </div>
 @endif
