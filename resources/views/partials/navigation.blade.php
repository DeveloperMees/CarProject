@if($item->show)
    <li>
        <a href="{{ ($item->clickable ? $item->getUrl() : '#') }}"
           {!! ($item->isCurrentPage() ? ' class="active"' : '') !!} title="{{ $item->title }}">
            {{ $item->title }}
            @if($item->getChildren()->count())
                <span class="icon-arrow-down"></span>
            @endif
        </a>
        @if($item->getChildren()->count())
            <ul>
                @each('partials.navigation', $item->getChildren(), 'item')
            </ul>
        @endif
    </li>
@endif
