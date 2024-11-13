<div class="w-full h-full overflow-x-hidden">
@include('components/header')
<div class="w-full overflow-hidden p-3">
    <div class="w-full h-full overflow-hidden flex flex-col shadow bg-white p-5 rounded-lg">
    <div class="w-full flex flex-col-reverse md:flex-row mb-5">
        <input placeholder="Pesquisar" type="text" class="border-2 outline-none rounded p-2 w-full md:w-[50%] border-gray-300">
        <div class="md:w-[50%] py-5 md:py-0 font-semibold text-xl flex items-center justify-center md:justify-center">
            <button x-data x-on:click="$dispatch('open-modal', { name: 'cadastro-turma' })" class="border-2 border-teal-500 bg-teal-500 rounded-md shadow-md px-2 mx-2"><i class="bi bi-plus-lg"></i> Nova Turma</button>
            <button wire:click.prevent="openDeleteTurma()"  class="border-2 border-red-400 bg-red-400 rounded-md shadow-md px-2 mx-2"><i class="bi bi-trash"></i> Excluir</button>
        </div>
    </div>
        <div class="relative w-full bg-slate-50 p-5 overflow-x-auto overflow-y-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Escola
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data de início
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Data de conclusão
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ação
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($turmas as $turma)
                    <tr wire:key="{{$turma->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex items-center">
                                <input wire:model="form.turmaDelete.{{$turma->id}}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                            </div>
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$turma->name}}
                        </th>
                        @foreach($turma->school()->get() as $escola)
                        <td class="px-6 py-4 text-[16px]">
                            {{$escola->name}}
                        </td>
                        @endforeach
                        <td class="px-6 py-4 text-[16px]">
                            {{date('d/m/Y', strtotime($turma->startDate))}}
                        </td>
                        <td class="px-6 py-4 text-[16px]">
                            {{date('d/m/Y', strtotime($turma->endDate))}}
                        </td>
                        <td class="px-6 py-4 text-[16px]">
                            @if($turma->active) Aberta @else Fechada @endif
                        </td>
                        <td class="px-6 py-4 flex text-[16px]">
                            <button wire:click.prevent="openEditTurma({{$turma->id}})" class="font-medium flex text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-pencil-fill"></i> Editar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <nav class="flex bg-white items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
            
        </nav>
        </div>
  </div>   
   @include('components/footer')


   <!--- MODAL DE CADASTRO --->
   <form wire:submit.prevent="save">
        <x-modal.modal-lg name="cadastro-turma" title="Cadastro de turma">
            <x-slot:body>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">Nome da turma</label>
                        <input required wire:model="form.name"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.name') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Escola</label>
                        <select required wire:model="form.school_id" class="p-2 outline-none border-2 border-gray-300 rounded">
                            <option>Selecione uma escola</option>
                            @foreach($schools as $school)
                                <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                        </select>
                        @error('form.school_id') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">Ano da turma</label>
                        <input required wire:model="form.year"  class="p-2 outline-none border-2 border-gray-300 rounded" type="number">
                        @error('form.year') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Status</label>
                        <select required wire:model="form.active" class="p-2 outline-none border-2 border-gray-300 rounded">
                            <option>Selecione uma opção</option>
                            <option value="true">Aberta</option>
                            <option value="false">Fechada</option>
                        </select>
                        @error('form.active') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Data de início</label>
                        <input required wire:model="form.startDate" type="date"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.startDate') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Data de conclusão</label>
                        <input required wire:model="form.endDate" type="date"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.endDate') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>
            <x-slot:footer>
                <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
                <button type="submit" class="bg-teal-500 border-2 mx-2 px-2 border-teal-500 rounded-md shadow-md"><i class="bi bi-check-lg"></i> Cadastrar</button>
            </x-slot>
        </x-modal.modal-lg>
    </form>

    <!-- MODAL EDITAR -->
    <form wire:submit.prevent="update">
        <x-modal.modal-lg name="editar-turma" title="Alterar turma">
            <x-slot:body>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">Nome da turma</label>
                        <input wire:model="form.name"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.name') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Escola</label>
                        <select wire:model="form.school_id" class="p-2 outline-none border-2 border-gray-300 rounded">
                            <option>Selecione uma escola</option>
                            @foreach($schools as $school)
                                <option value="{{$school->id}}">{{$school->name}}</option>
                            @endforeach
                        </select>
                        @error('form.school_id') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-2">
                    
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">Ano da turma</label>
                        <input wire:model="form.year"  class="p-2 outline-none border-2 border-gray-300 rounded" type="number">
                        @error('form.year') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Status</label>
                        <select required wire:model="form.active" class="p-2 outline-none border-2 border-gray-300 rounded">
                            <option value="">Selecione uma opção</option>
                            <option value="true">Aberta</option>
                            <option value="false">Fechada</option>
                        </select>
                        @error('form.active') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Data de início</label>
                        <input wire:model="form.startDate" type="date"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.startDate') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Data de conclusão</label>
                        <input wire:model="form.endDate" type="date"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.endDate') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
            </x-slot>
            <x-slot:footer>
                <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
                <button type="submit" class="bg-teal-500 border-2 mx-2 px-2 border-teal-500 rounded-md shadow-md"><i class="bi bi-check-lg"></i> Editar</button>
            </x-slot>
        </x-modal.modal-lg>
    </form>

    <x-modal.confirmation name="delete-turma" title="Confirmação">
        <x-slot:body>
            Deseja realmente excluir a(s) turma(s) selecionada(s)?
        </x-slot>
        <x-slot:footer>
        <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
        <button wire:click.prevent="deleteTurma()" type="submit" class="bg-red-400 border-2 mx-2 px-2 border-red-400 rounded-md shadow-md"><i class="bi bi-check-lg"></i>Confirmar</button>
        </x-slot>
    </x-modal.confirmation>

</div>


