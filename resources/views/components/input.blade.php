@if ($type !== 'password')
    <div class="relative min-w-[200px]  ">
        <label for="{{ $id }}"
            class="absolute z-10 px-1.5 text-gray-l font-semibold transition-all top-2/4 -translate-y-2/4 bg-gray-d cursor-text left-3">
            {{ $label }}
        </label>

        <input
            class="w-full px-4 py-2 text-gray-l border border-gray-l rounded-lg bg-gray-d focus:text-30% focus:outline-none focus:border-30%"
            type="{{ $type }}" id="{{ $id }}" required />
    </div>
@endif
