{{-- MenuItemRender --}}

<h4 class="fw-bold py-3 mb-4 no-print">

    @foreach ($breadcrumbs as $label => $url)
        <span class="text-muted fw-light" @if ($loop->last) active @endif
            @if (!$loop->last) aria-current="page" @endif>
            @if ($loop->last)
                {{ $label }}
            @else
                <a href="{{ $url }}">{{ $label }}</a> /
            @endif
        </span>
    @endforeach

</h4>
