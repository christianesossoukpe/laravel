@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex justify-center">
        <ul class="flex items-center space-x-2">
            {{-- Page précédente --}}
            @if ($paginator->onFirstPage())
                <li class="disabled cursor-not-allowed">
                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md">Précédent</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">
                        Précédent
                    </a>
                </li>
            @endif

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            @if ($page == $paginator->currentPage())
                                <span class="px-4 py-2 bg-blue-500 text-white rounded-md">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="px-4 py-2 bg-white text-gray-800 rounded-md hover:bg-gray-200">
                                    {{ $page }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Page suivante --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">
                        Suivant
                    </a>
                </li>
            @else
                <li class="disabled cursor-not-allowed">
                    <span class="px-4 py-2 bg-gray-200 text-gray-500 rounded-md">Suivant</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
