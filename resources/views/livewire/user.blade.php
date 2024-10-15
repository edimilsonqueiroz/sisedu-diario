<div class="w-full h-full overflow-x-hidden">
@include('components/header')
<div class="md:p-3 p-2 w-full">
      
<div class="w-full h-full overflow-hidden flex flex-col shadow bg-white p-5 rounded-lg">
  <div class="w-full flex flex-col-reverse md:flex-row mb-5">
     <input wire:model.live="query" placeholder="Pesquisar" type="text" class="border-2 outline-none rounded p-2 w-full md:w-[50%] border-gray-300">
     <div class="md:w-[50%] py-5 md:py-0 flex font-semibold items-center justify-center md:justify-center">
        <button x-data x-on:click="$dispatch('open-modal', { name: 'cadastro-usuario' })" class="border-2 border-teal-500 bg-teal-500 rounded-md shadow-md px-2 mx-2"><i class="bi bi-person-fill-add"></i> Novo Usuário</button>
        <button wire:click="openDeleteUser()" class="border-2 border-red-400 bg-red-400 rounded-md shadow-md px-2 mx-2"><i class="bi bi-trash"></i> Excluir</button>
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
                    CPF
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
            @foreach($users as  $user)
            <tr wire:key="{{$user->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input wire:model="form.userDelete.{{$user->id}}" name="userDelete[]" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->email}}
                </td>
                <td class="px-6 py-4">
                    {{$user->cpf}}
                </td>
                <td class="px-6 py-4">
                    {{date('d/m/Y',strtotime($user->created_at))}}
                </td>
                <td class="px-6 py-4 flex text-[16px]">
                    <button wire:click.prevent="openEditUser({{$user->id}})" class="font-medium flex text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-pencil-fill"></i> Editar</button>
                    <button wire:click="openPermission({{$user->id}})" class="font-medium flex mx-2 text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-person-fill-lock"></i> Permissões</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <nav class="flex bg-white items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        {{$users->links()}}
    </nav>
    </div>
    </div>
   @include('components/footer')


   <!--- MODAIS --->
   <form wire:submit.prevent="save">
        <x-modal.modal-md name="cadastro-usuario" title="Cadastro de usuário">
                <x-slot:body>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Nome</label>
                            <input required wire:model="form.name" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.name') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">E-mail</label>
                            <input required wire:model="form.email" class="p-2 outline-none border-2 border-gray-300 rounded" type="email">
                            @error('form.email') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">CPF</label>
                            <input required wire:model="form.cpf" maxlength="11" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            @error('form.cpf') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Senha</label>
                            <input required wire:model="form.password" class="p-2 outline-none border-2 border-gray-300 rounded" type="password">
                            @error('form.password') <span class="text-red-400">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <fieldset class="border-2 border-gray-300 w-full rounded-md">
                    <legend class="font-semibold">Perfil de Usuário</legend>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-2">
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isAdmin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">ADMINISTRADOR</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isProfessor"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">PROFESSOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isCoordenador" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">COORDENADOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isSecretaria" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">SECRETARIA ESCOLAR</label>
                            </div>
                    </div>
                </fieldset>
                </x-slot>
                <x-slot:footer>
                    <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
                    <button type="submit" class="bg-teal-500 border-2 mx-2 px-2 border-teal-500 rounded-md shadow-md"><i class="bi bi-check-lg"></i> Cadastrar</button>
                </x-slot>
            </x-modal.modal-md>
    </form>

    <!-- MODAL EDITAR USUARIO -->
     <form wire:submit.prevent="update">
        <x-modal.modal-md name="editar-usuario" title="Editar usuário">
            <x-slot:body>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">Nome</label>
                        <input required wire:model="form.name" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.name') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">E-mail</label>
                        <input required wire:model="form.email" class="p-2 outline-none border-2 border-gray-300 rounded" type="email">
                        @error('form.email') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">CPF</label>
                        <input required wire:model="form.cpf" maxlength="11" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        @error('form.cpf') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Senha</label>
                        <input wire:model="form.password" class="p-2 outline-none border-2 border-gray-300 rounded" type="password">
                        @error('form.password') <span class="text-red-400">{{ $message }}</span> @enderror
                    </div>
                </div>
                <fieldset class="border-2 border-gray-300 w-full rounded-md">
                    <legend class="font-semibold">Perfil de Usuário</legend>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-2">
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isAdmin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">ADMINISTRADOR</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isProfessor"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">PROFESSOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isCoordenador" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">COORDENADOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox" wire:model="form.isSecretaria" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">SECRETARIA ESCOLAR</label>
                            </div>
                    </div>
                </fieldset>
            </x-slot>
            <x-slot:footer>
                <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
                <button type="submit" class="bg-teal-500 border-2 mx-2 px-2 border-teal-500 rounded-md shadow-md"><i class="bi bi-check-lg"></i> Editar</button>
            </x-slot>
        </x-modal.modal-md>
    </form>

    <x-modal.confirmation name="delete-user" title="Confirmação">
        <x-slot:body>
            Deseja realmente excluir o(s) usuário(s) selecionado(s)?
        </x-slot>
        <x-slot:footer>
        <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
        <button wire:click="deleteUser" type="submit" class="bg-red-400 border-2 mx-2 px-2 border-red-400 rounded-md shadow-md"><i class="bi bi-check-lg"></i>Confirmar</button>
        </x-slot>
    </x-modal.confirmation>


    <!-- MODAL PERMISSÕES -->
     <x-modal.modal-md name="permission" title="Permissões de usuário">
        <x-slot:body>
        <h1 class="text-xl my-2">Nome: <span class="font-semibold">{{$this->form->name}}</span> </h1>
        <fieldset class="border-2 border-gray-300 w-full rounded-md">
                    <legend class="font-semibold">Perfil de Usuário</legend>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-2">
                            <div class="flex items-center grid-cols-1">
                                <input disabled  type="checkbox" wire:model="form.isAdmin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">ADMINISTRADOR</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input disabled  type="checkbox" wire:model="form.isProfessor"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">PROFESSOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input disabled  type="checkbox" wire:model="form.isCoordenador" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">COORDENADOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input disabled type="checkbox" wire:model="form.isSecretaria" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">SECRETARIA ESCOLAR</label>
                            </div>
                    </div>
                </fieldset>
        </x-slot>
        <x-slot:footer>
            
        </x-slot:footer>
     </x-modal.modal-md>
</div>
