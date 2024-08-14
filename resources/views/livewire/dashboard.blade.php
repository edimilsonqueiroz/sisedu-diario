<div class="w-full h-full min-h-full">
    @include('components/header')
        <div class="flex w-full h-[1500px] flex-col">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-3">
                <div class="bg-cyan-500 h-28 rounded-md col-span-1">
                    Layout 1
                </div>
                <div class="col-span-1 rounded-md bg-blue-500 h-28">
                    Layout 2
                </div>
                <div class="col-span-1 rounded-md bg-orange-500 h-28">
                    Layout 3
                </div>
            </div>

            <x-modal.modal-lg name="usuario" title="Modal de usuário">
                <x-slot:body>
                    Modal de Usuário
                </x-slot>
                <x-slot:footer>
                    Footer
                </x-slot>
            </x-modal.modal-gl>
            <x-modal.modal-lg name="professor" title="Modal de professor">
                <x-slot:body>
                    Modal de professor
                </x-slot>
                <x-slot:footer>
                    Footer
                </x-slot>
            </x-modal.modal-gl>

            <button x-data x-on:click="$dispatch('open-modal', { name: 'usuario' })" class="px-3 py-1 m-5 bg-teal-500 max-w-40 text-white rounded">Usuário</button>
            <button x-data x-on:click="$dispatch('open-modal', { name: 'professor' })" class="px-3 py-1 m-5 bg-teal-500 max-w-40 text-white rounded">Professor</button>
        </div>
    @include('components/footer')
</div>
