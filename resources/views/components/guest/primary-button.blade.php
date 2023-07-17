@if ($type === 'link')
    @if ($actived === 'true')
        <button
            {{ $attributes->merge(['type' => $type, 'class' => 'bg-primary-light text-white uppercase text-[11px] font-semibold cursor-pointer border-2 border-text rounded-xl py-2']) }}>
            {{ $value }}
        </button>
    @else
        <button
            {{ $attributes->merge(['type' => $type, 'class' => 'text-text uppercase text-[11px] font-semibold cursor-pointer']) }}>
            {{ $value }}
        </button>
    @endif
@else
    <button
        {{ $attributes->merge(['type' => $type, 'class' => 'bg-primary-light text-white uppercase text-[11px] font-semibold cursor-pointer border-2 border-text rounded-xl py-2']) }}>
        {{ $value }}
    </button>
@endif
