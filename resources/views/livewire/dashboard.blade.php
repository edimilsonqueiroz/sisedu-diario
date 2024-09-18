<div class="w-full h-full min-h-full">
    @include('components/header')
        <div class="flex w-full flex-col">
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
            
            <x-modal.modal-lg name="modal-lg" title="Modal LG">
                <x-slot:body>
                    <span>Modal LG</span>
                </x-slot>
                <x-slot:footer>
                    Footer
                </x-slot>
            </x-modal.modal-lg>
            <x-modal.modal-md name="modal-md" title="Modal MD">
                <x-slot:body>
                    <span>Modal MD</span>
                </x-slot>
                <x-slot:footer>
                    Footer
                </x-slot>
            </x-modal.modal-md>
            <x-modal.confirmation name="confirmation" title="Modal de Confirmação">
                <x-slot:body>
                    <span>Modal Confirmação</span>
                </x-slot>
                <x-slot:footer>
                    Footer
                </x-slot>
            </x-modal.confirmation>

            
            <button x-data x-on:click="$dispatch('open-modal', { name: 'modal-lg' })" class="px-3 py-1 m-5 bg-teal-500 max-w-40 text-white rounded">Modal LG</button>
            <button x-data x-on:click="$dispatch('open-modal', { name: 'modal-md' })" class="px-3 py-1 m-5 bg-teal-500 max-w-40 text-white rounded">Modal MD</button>
            <button x-data x-on:click="$dispatch('open-modal', { name: 'confirmation' })" class="px-3 py-1 m-5 bg-teal-500 max-w-40 text-white rounded">Modal Confirmação</button>
            
        </div>
    @include('components/footer')
</div>
