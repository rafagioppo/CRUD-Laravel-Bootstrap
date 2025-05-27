@if ($paginator->hasPages())
<nav>
    <ul class="pagination justify-content-center">
        {{-- Botão "Anterior" --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link bg-dark text-white border-secondary">Anterior</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link bg-dark text-white border-secondary" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
            </li>
        @endif

        {{-- Páginas --}}
        @foreach ($elements as $element)
            {{-- "..." Separador --}}
            @if (is_string($element))
                <li class="page-item disabled">
                    <span class="page-link bg-dark text-white border-secondary">{{ $element }}</span>
                </li>
            @endif

            {{-- Links de página --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page">
                            <span class="page-link bg-secondary text-white border-secondary">{{ $page }}</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link bg-dark text-white border-secondary" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botão "Próximo" --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link bg-dark text-white border-secondary" href="{{ $paginator->nextPageUrl() }}" rel="next">Próximo</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link bg-dark text-white border-secondary">Próximo</span>
            </li>
        @endif
    </ul>
</nav>
@endif
