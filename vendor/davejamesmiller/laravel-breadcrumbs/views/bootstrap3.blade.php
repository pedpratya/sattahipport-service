@if ($breadcrumbs)

        @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->last)

                        {{{ $breadcrumb->title }}}

                @elseif ($breadcrumb->url)
                        <a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a>
                        <span class="divider">/</span>
                @else
                        {{-- Using .active to give it the right colour (grey by default) --}}
                        {{{ $breadcrumb->title }}}
                        <span class="divider">/</span>
                @endif
        @endforeach
@endif
