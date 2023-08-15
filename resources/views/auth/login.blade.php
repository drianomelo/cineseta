<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-between px-1.5 py-1 mb-4 rounded-xl bg-primary-dark shadow-input">
        <x-guest.primary-button type="link" value="registrar" actived="false" class="w-2/4 " />
        <x-guest.primary-button type="link" value="entrar" actived="true" class="w-2/4 " />
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <x-guest.input type="email" id="email" label="Email" />

        <!-- Password -->
        <x-guest.input type="password" id="password" label="Senha" />


        <div class="flex flex-col items-center justify-end gap-3 mt-4">
            <x-guest.primary-button type="submit" value="Entrar na conta" actived="true" class="w-full" />
            <div class="flex items-center w-full gap-2">
                <div class="w-full h-[2px] bg-text"></div>
                <span class="flex text-xs font-semibold text-white ">OU</span>
                <div class="w-full h-[2px] bg-text"></div>
            </div>
            <x-guest.secondary-button type="submit" value="Entrar como adm" actived="true" class="w-full" />
        </div>
    </form>
</x-guest-layout>
