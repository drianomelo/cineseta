@if ($active == 'true')
    <li>
        <a href="{{ $href }}" class="flex flex-col items-center justify-center gap-1 ">
            <img src="{{ $srcactive }}" alt="{{ $alt }}">
            <h4 class="text-xs font-medium text-secondary">{{ $title }}</h4>
            <div class="h-1 rounded-t-lg w-14 bg-secondary"></div>
        </a>
    </li>
@elseif ($active == 'false')
    <li>
        <a href="{{ $href }}" class="flex flex-col items-center justify-center gap-1">
            <img src="{{ $src }}" alt="{{ $alt }}">
            <h4 class="text-xs font-medium text-gray">{{ $title }}</h4>
            <div class="h-1 rounded-t-lg w-14"></div>
        </a>
    </li>
@endif
