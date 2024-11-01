<div class="w-full h-full bg-white">
   <div class="w-full flex h-full">
        <div class="w-[50%] md:flex hidden items-center justify-center h-full bg-cyan-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-60">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
            </svg>
        </div>
        <div class="flex-1 flex flex-col items-center justify-center">
            <div class="flex items-center justify-center flex-col">
                <x-icones.icone-school/>
                <h1 class="text-5xl font-semibold">SISEDU-DIÁRIO</h1>
                <span class="text-2xl">Acesso de Usuário</span>
            </div>
            <div class="w-full md:px-20 md:my-5">
                @if (session('login'))
                <div class="bg-red-400 rounded text-lg text-center p-5">
                    {{ session('login') }}
                </div>
                @endif
            </div>
            <form wire:submit.prevent="generateOTP"  class="flex flex-col w-full px-5 md:px-20">
                <label class="text-xl">E-mail</label> 
                <input placeholder="Informe seu e-mail cadastrado" required class="border-2 px-2 py-3 text-xl outline-none rounded-md border-gray-300" type="email">
                @error('') <span class="text-red-400">{{ $message }}</span> @enderror
                <div class="w-full flex flex-col-reverse md:flex-row items-center justify-between">
                    <a wire:navigate class="text-xl"  href="{{route('login')}}">Voltar para login?</a>
                    <button class="bg-cyan-500 mb-5 mt-8 py-3 w-full md:w-[50%] text-xl text-white rounded-md border-0">Solicitar alteração da senha</button>
                </div>
            </form>
        </div>
   </div>
</div>

