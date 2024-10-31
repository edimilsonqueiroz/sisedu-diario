<div class="w-full h-full overflow-x-hidden">
@include('components/header')
<div class="md:p-3 p-2 w-full">
      
<div class="w-full h-full overflow-hidden flex flex-col shadow bg-white p-5 rounded-lg">
  <div class="w-full flex flex-col-reverse md:flex-row mb-5">
     <input wire:model.live="query" placeholder="Pesquisar" type="text" class="border-2 outline-none rounded p-2 w-full md:w-[50%] border-gray-300">
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
            
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    
                </th>
                <td class="px-6 py-4">
                    
                </td>
                <td class="px-6 py-4">
                    
                </td>
                <td class="px-6 py-4">
                    
                </td>
                <td class="px-6 py-4 flex text-[16px]">
                    <button  class="font-medium flex text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-pencil-fill"></i> Editar</button>
                    <button  class="font-medium flex mx-2 text-blue-600 dark:text-blue-500 hover:underline"><i class="bi bi-person-fill-lock"></i> Permissões</button>
                </td>
            </tr>
            
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
        <x-modal.modal-md name="cadastro-aluno" title="Cadastro de aluno">
                <x-slot:body>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">Nome</label>
                            <input required  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">E-mail</label>
                            <input  class="p-2 outline-none border-2 border-gray-300 rounded" type="email">
                            
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="flex flex-col p-1">
                            <label for="">CPF</label>
                            <input required  maxlength="11" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                            
                        </div>
                        <div class="flex flex-col p-1">
                            <label for="">Senha</label>
                            <input required  class="p-2 outline-none border-2 border-gray-300 rounded" type="password">
                            
                        </div>
                    </div>
                    <fieldset class="border-2 border-gray-300 w-full rounded-md">
                    <legend class="font-semibold">Perfil de Usuário</legend>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-2">
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">ADMINISTRADOR</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox"   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">PROFESSOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">COORDENADOR(A)</label>
                            </div>
                            <div class="flex items-center grid-cols-1">
                                <input  type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"><label class="ml-2" for="">SECRETARIA ESCOLAR</label>
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

    <!-- MODAL EDITAR MATRICULA -->
     <form>
        <x-modal.modal-md name="editar-matricula" title="Editar matricula">
            <x-slot:body>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">Nome</label>
                        <input required  class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">E-mail</label>
                        <input required  class="p-2 outline-none border-2 border-gray-300 rounded" type="email">
                        
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div class="flex flex-col p-1">
                        <label for="">CPF</label>
                        <input required  maxlength="11" class="p-2 outline-none border-2 border-gray-300 rounded" type="text">
                        
                    </div>
                    <div class="flex flex-col p-1">
                        <label for="">Senha</label>
                        <input  class="p-2 outline-none border-2 border-gray-300 rounded" type="password">
                        
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

    <x-modal.confirmation name="delete-student" title="Confirmação">
        <x-slot:body>
            Deseja realmente excluir o(s) registro(s) selecionado(s)?
        </x-slot>
        <x-slot:footer>
            <div x-on:click="$dispatch('close-modal')" class="border-2 border-slate-400 bg-slate-400 px-2 rounded-md shadow-md cursor-pointer"><i class="bi bi-x-lg"></i> Fechar</div>
            <button type="submit" class="bg-red-400 border-2 mx-2 px-2 border-red-400 rounded-md shadow-md"><i class="bi bi-check-lg"></i>Confirmar</button>
        </x-slot>
    </x-modal.confirmation>

</div>
