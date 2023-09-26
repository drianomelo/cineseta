<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-center w-3/4 mx-auto mb-8 bg-[#111318] p-1.5 rounded-lg gap-4">
        <a href="{{ route('login') }}"
            class="flex-1  text-sm font-bold text-center uppercase bg-30% rounded-md py-1.5 text-30%-d">login</a>
        <a href="{{ route('register') }}"
            class="flex-1 text-center text-sm uppercase font-bold  py-1.5 text-gray">registrar</a>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Credenciais -->
            <div class="relative p-5 border rounded-lg border-gray-l">
                <h2 class="absolute top-0 px-4 font-semibold text-gray-l left-6 -translate-y-2/4 bg-gray-d">Credenciais
                </h2>
            <div class="mt-4">
                <x-input type="text" id="email" label="Email" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="senha" label="Senha" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                LOGIN
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
