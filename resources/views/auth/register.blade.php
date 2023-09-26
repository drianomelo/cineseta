<x-guest-layout>
    <div class="flex items-center justify-center w-3/4 mx-auto mb-8 bg-[#111318] p-1.5 rounded-lg gap-4">
        <a href="{{ route('login') }}" class="flex-1  text-sm font-bold text-center uppercase text-gray py-1.5">login</a>
        <a href="{{ route('register') }}"
            class="flex-1 text-center text-sm uppercase font-bold bg-30% rounded-md py-1.5 text-30%-d">registrar</a>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Dados Pessoais -->
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

        <!-- Credenciais -->
        <div class="relative p-5 mt-6 border rounded-lg border-gray-l">
            <h2 class="absolute top-0 px-4 font-semibold text-gray-l left-6 -translate-y-2/4 bg-gray-d">Credenciais
            </h2>
            <div class="mt-2">
                <x-input type="text" id="email" label="Email" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="password" label="Senha" />
            </div>

            <div class="mt-4">
                <x-input type="text" id="confirm-password" label="Confirmar Senha" />
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                Registrar
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
