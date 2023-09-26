<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-30%     border border-transparent rounded-md font-semibold text-xs text-30%-d uppercase']) }}>
    {{ $slot }}
</button>
