<div class="w-full h-full overflow-x-hidden">
@include('components/header')
<div class="md:p-3 p-2 w-full">
      
<div class="w-full h-full overflow-hidden flex flex-col shadow bg-white p-5 rounded-lg">
  <div class="w-full flex flex-col-reverse md:flex-row mb-5">
     <input  placeholder="Pesquisar" type="text" class="border-2 outline-none rounded p-2 w-full md:w-[50%] border-gray-300">
     <div class="md:w-[50%] py-5 md:py-0 flex font-semibold items-center justify-center md:justify-center">
        <button x-data x-on:click="$dispatch('open-modal', { name: 'cadastro-aluno' })" class="border-2 border-teal-500 bg-teal-500 rounded-md shadow-md px-2 mx-2"><i class="bi bi-person-fill-add"></i> Nova Matricula</button>
        <button class="border-2 border-red-400 bg-red-400 rounded-md shadow-md px-2 mx-2"><i class="bi bi-trash"></i> Excluir</button>
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
                    E-mail
                </th>
                <th scope="col" class="px-6 py-3">
                    Data de Cadastro
                </th>
                <th scope="col" class="px-6 py-3">
                    Ação
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$student->name}}
                </th>
                <td class="px-6 py-4">
                    {{$student->email}}
                </td>
                <td class="px-6 py-4">
                    {{date('d/m/Y', strtotime($student->created_at))}}
                </td>
                <td class="px-6 py-4 flex text-[16px]">
                    <button wire:click.prevent="openEditStudent({{$student->id}})" class="font-medium flex text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-pencil-fill"></i> Editar</button>
                    <button wire:click.prevent="openInfoStudent({{$student->id}})" class="font-medium flex text-blue-600 ml-2 dark:text-blue-500 hover:underline"><i class="bi bi-info-circle-fill mr-1"></i> Informações</button>
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


   <!--- MODAIS CADASTRO ALUNO --->
   <form wire:submit.prevent="save">
        <x-modal.modal-lg name="cadastro-aluno" title="Cadastro de aluno">
                <x-slot:body>
                    <div class="grid grid-cols-1 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Escola</label>
                            <select wire:model="form.school" class="p-2 outline-none border-2 border-gray-300 rounded">
                                <option value="">Selecione uma escola</option>
                                @foreach($schools as $school)
                                <option value="{{$school->id}}">{{$school->name}}</option>
                                @endforeach
                            </select>
                            @error('form.school') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Nome</label>
                            <input wire:model="form.name" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.name') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">E-mail</label>
                            <input wire:model="form.email"  class="p-2 outline-none border-2 border-gray-300 rounded" type="email">
                            @error('form.email') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Telefone</label>
                            <input wire:model="form.telephone" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.telephone') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">CPF</label>
                            <input wire:model="form.cpf"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.cpf') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">RG</label>
                            <input wire:model="form.rg" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.rg') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Sexo</label>
                            <select wire:model="form.sex" class="p-2 outline-none border-2 border-gray-300 rounded">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                            @error('form.sex') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Nome do pai</label>
                            <input wire:model="form.fatherName" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.fatherName') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Nome da mãe</label>
                            <input wire:model="form.matherName" type="text" class="p-2 outline-none border-2 border-gray-300 rounded">
                            @error('form.matherName') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Data de Nascimento</label>
                            <input wire:model="form.dateBirth" class="p-2 outline-none border-2 border-gray-300 rounded" type="date">
                            @error('form.dateBirth') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Turma atual</label>
                            <select wire:model="form.current_class" class="p-2 outline-none border-2 border-gray-300 rounded">
                                <option value="1º ANO">1º ANO E.F</option>
                                <option value="2º ANO">2º ANO E.F</option>
                                <option value="3º ANO">3º ANO E.F</option>
                                <option value="4º ANO">4º ANO E.F</option>
                            </select>
                            @error('form.current_class') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </x-slot>
                <x-slot:footer>
                    <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
                    <button type="submit" class="bg-teal-500 border-2 mx-2 px-2 border-teal-500 rounded-md shadow-md"><i class="bi bi-check-lg"></i> Cadastrar</button>
                </x-slot>
            </x-modal.modal-lg>
    </form>

    <!-- MODAL EDITAR MATRICULA -->
     <form wire:submit.prevent="update">
        <x-modal.modal-lg name="editar-aluno" title="Editar aluno">
                <x-slot:body>
                    <div class="grid grid-cols-1 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Escola</label>
                            <select wire:model="form.school" class="p-2 outline-none border-2 border-gray-300 rounded">
                                <option value="">Selecione uma escola</option>
                                @foreach($schools as $school)
                                <option value="{{$school->id}}">{{$school->name}}</option>
                                @endforeach
                            </select>
                            @error('form.school') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Nome</label>
                            <input wire:model="form.name" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.name') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">E-mail</label>
                            <input wire:model="form.email"  class="p-2 outline-none border-2 border-gray-300 rounded" type="email">
                            @error('form.email') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Telefone</label>
                            <input wire:model="form.telephone" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.telephone') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">CPF</label>
                            <input wire:model="form.cpf"  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.cpf') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">RG</label>
                            <input wire:model="form.rg" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.rg') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Sexo</label>
                            <select wire:model="form.sex" class="p-2 outline-none border-2 border-gray-300 rounded">
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                            @error('form.sex') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Nome do pai</label>
                            <input wire:model="form.fatherName" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.fatherName') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Nome da mãe</label>
                            <input wire:model="form.matherName" type="text" class="p-2 outline-none border-2 border-gray-300 rounded">
                            @error('form.matherName') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Data de Nascimento</label>
                            <input wire:model="form.dateBirth" class="p-2 outline-none border-2 border-gray-300 rounded" type="date">
                            @error('form.dateBirth') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Turma atual</label>
                            <select wire:model="form.current_class" class="p-2 outline-none border-2 border-gray-300 rounded">
                                <option value="1º ANO">1º ANO E.F</option>
                                <option value="2º ANO">2º ANO E.F</option>
                                <option value="3º ANO">3º ANO E.F</option>
                                <option value="4º ANO">4º ANO E.F</option>
                            </select>
                            @error('form.current_class') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </x-slot>
                <x-slot:footer>
                    <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
                    <button type="submit" class="bg-teal-500 border-2 mx-2 px-2 border-teal-500 rounded-md shadow-md"><i class="bi bi-check-lg"></i> Editar</button>
                </x-slot>
        </x-modal.modal-lg>
    </form>

    <x-modal.confirmation name="delete-student" title="Confirmação">
        <x-slot:body>
            Deseja realmente excluir o(s) registro(s) selecionado(s)?
        </x-slot>
        <x-slot:footer>
            <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
            <button type="submit" class="bg-red-400 border-2 mx-2 px-2 border-red-400 rounded-md shadow-md"><i class="bi bi-check-lg"></i>Confirmar</button>
        </x-slot>
    </x-modal.confirmation>

    <x-modal.modal-lg name="info-aluno" title="Informações do(a) aluno(a)">
        <x-slot:body>
            <div class="grid p-2 md:grid-cols-4 grid-cols-2 gap-2">
                <label class="col-span-2" for=""><span class="font-semibold">CPF:</span> {{$this->form->cpf}}</label>
                <label class="col-span-1" for=""><span class="font-semibold">RG:</span> {{$this->form->rg}}</label>
                <label class="col-span-1" for=""><span class="font-semibold">SEXO: </span> {{$this->form->sex}}</label>
            </div>
            <div class="grid p-2 grid-cols-4 gap-2">
               <label class="col-span-2" for=""><span class="font-semibold">NOME DO PAI:</span> {{$this->form->fatherName}}</label>
               <label class="col-span-2" for=""><span class="font-semibold">NOME DA MÃE:</span> {{$this->form->matherName}}</label>
            </div>
            <div class="grid p-2 grid-cols-4 gap-2">
                <label class="col-span-2" for=""><span class="font-semibold">DATA DE NASCIMENTO:</span> {{date('d/m/Y',strtotime($this->form->dateBirth))}}</label>
                <label class="col-span-2" for=""><span class="font-semibold">TURMA ATUAL:</span> {{$this->form->current_class}}</label>
            </div>
        </x-slot>
        <x-slot:footer>
            <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
        </x-slot>
    </x-modal.modal-lg>

</div>

