<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="relative p-5 border rounded-lg border-gray-l">
            <h2 class="absolute top-0 px-4 font-semibold text-gray-l left-6 -translate-y-2/4 bg-gray-d">Dados pessoais
            </h2>
            <div class="mt-2">
                <x-input type="text" id="primeiro_nome" label="Primeiro Nome" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="sobrenome" label="Sobrenome" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="cpf" label="CPF" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="telefone" label="Telefone" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="data_nascimento" label="Data de Nascimento" />
            </div>
        </div>

        <!-- Email Address -->
        <div class="relative p-5 mt-6 border rounded-lg border-gray-l">
            <h2 class="absolute top-0 px-4 font-semibold text-gray-l left-6 -translate-y-2/4 bg-gray-d">Credenciais
            </h2>
            <div class="mt-2">
                <x-input type="text" id="email" label="Email" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input type="text" id="password" label="Senha" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input type="text" id="confirm-password" label="Confirmar Senha" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            {{-- <a class="text-sm text-white underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}

            <x-primary-button class="ml-4">
                Registrar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
