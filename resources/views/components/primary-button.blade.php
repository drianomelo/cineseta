<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-gray-d uppercase transition hover:bg-30% hover:text-white duration-300']) }}>
    {{ $slot }}
</button>
