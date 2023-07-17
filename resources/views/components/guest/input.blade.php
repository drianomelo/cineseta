<label for="{{ $id }}" class="text-[13px] font-bold text-text relative">{{ $label }}
    @if ($type === 'password')
        <div class="relative flex items-center">
            <input id="{{ $id }}" type="{{ $type }}"
                class="w-full  p-3 border-none text-[13px] outline-none font-bold text-text rounded-xl  bg-primary-dark shadow-input">
            <button class="absolute right-0 h-full bg-transparent w-11 rounded-r-xl top-2/4 -translate-y-2/4">
                <i class=" fa-solid fa-eye-slash"></i>
            </button>
        </div>
    @else
        <input id="{{ $id }}" type="{{ $type }}"
            class="w-full  p-3 border-none text-[13px] outline-none font-bold text-text rounded-xl bg-primary-dark shadow-input">
    @endif
</label>
